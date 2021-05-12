<?php

namespace QH\Sellandsign;

use QH\Sellandsign\Collection\{ContractCollection,SignatoryCollection};
use QH\Sellandsign\DataTransformer\RequestToArrayTransformer;
use QH\Sellandsign\DTO\Factory\{ContractFactory,SignatoryFactory};
use QH\Sellandsign\DTO\{Request,Response,Contract};
use QH\Sellandsign\Exception\{ApiServerException,
    ContractsStructureException,
    ApiException,
    ExceptionHandler,
    SignatoryErrorException};
use QH\Sellandsign\Interfaces\ContractLoaderInterface;
use Symfony\Contracts\HttpClient\Exception\{
    ClientExceptionInterface,
    RedirectionExceptionInterface,
    ServerExceptionInterface,
    TransportExceptionInterface
};

class ContractLoader extends AbstractSellandsign implements ContractLoaderInterface
{
    /**
     * @param Request $request
     * @return ContractCollection
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface|ContractsStructureException|ApiException|\QH\Sellandsign\Exception\ApiServerException
     */
    public function getContracts(Request $request): ContractCollection
    {
        $data = [
            'json' => (new RequestToArrayTransformer())->transform($request),
            'headers' => [
                'Content-Type' => 'application/json',
            ]
        ];

        $url = $this->apiUrl . '/selling/do?m=getContracts&j_token=' . $this->token . '&licenseId=' . $this->licenseId;
        $response = $this->httpClient->request('POST', $url, $data);

        ExceptionHandler::handleApiErrors($response);

        $result = json_decode($response->getContent(), true);

        if (!isset($result['elements'])) {
            throw new ContractsStructureException("Impossible to recover the contracts");
        }

        $contracts = new ContractCollection;
        foreach ($result['elements'] as $contract) {
            $contracts->add(ContractFactory::fromArray($contract));
        }

        return $contracts;
    }

    /**
     * @param int $id
     * @return Contract
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface|ApiException|\QH\Sellandsign\Exception\ApiServerException
     */
    public function getContract(int $id): ?Contract
    {
        $url = $this->apiUrl . '/selling/model/contract/read?action=getContract&contract_id=' . $id . '&j_token=' . $this->token . '&licenseId=' . $this->licenseId;
        $response = $this->httpClient->request('GET', $url);

        ExceptionHandler::handleApiErrors($response);

        $result = json_decode($response->getContent(), true);

        if($result === null) {
            return null;
        }

        return ContractFactory::fromArray($result);

    }

    /**
     * @param int $contractId
     * @return SignatoryCollection
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws SignatoryErrorException
     * @throws TransportExceptionInterface
     */
    public function getContractorsAbout(int $contractId): SignatoryCollection
    {
        $url = $this->apiUrl . '/selling/model/contractorsforcontract/list?action=getContractorsAbout&contract_id=' . $contractId . '&j_token=' . $this->token . '&licenseId=' . $this->licenseId;
        $response = $this->httpClient->request('GET', $url, ['headers' => ['Content-Type' => 'application/pdf']]);

        ExceptionHandler::handleApiErrors($response);

        $result = json_decode($response->getContent(),true);

        if (!isset($result['elements'])) {
            throw new SignatoryErrorException("Impossible to recover the signatories");
        }

        $signatoryCollection = new SignatoryCollection;

        foreach ($result['elements'] as $signatory) {
            $signatoryCollection->add(SignatoryFactory::fromArray($signatory));
        }

        return $signatoryCollection;
    }

    /**
     * @param int $contractId
     * @return array
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function closeTransaction(int $contractId): array
    {
        $url = $this->apiUrl . '/selling/do?m=closeTransaction&id=' . $contractId . '&licenseId=' . $this->licenseId . '&j_token=' . $this->token;
        $response = $this->httpClient->request('GET', $url, ['headers' => ['Content-Type' => 'application/json']]);

        ExceptionHandler::handleApiErrors($response);

        return json_decode($response->getContent(),true);

    }

}