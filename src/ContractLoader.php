<?php

namespace QH\Sellandsign;

use QH\Sellandsign\Collection\{ContractCollection,SignatoryCollection};
use QH\Sellandsign\DataTransformer\RequestToArrayTransformer;
use QH\Sellandsign\DTO\Factory\{ContractFactory,SignatoryFactory};
use QH\Sellandsign\DTO\{Request,Response,Contract};
use QH\Sellandsign\Exception\{ContractsStructureException,ApiException,SignatoryErrorException};
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
     * @throws TransportExceptionInterface|ContractsStructureException|ApiException
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

        /**
         * todo - see the error codes API dimension to manage them properly
         */
        if (Response::HTTP_OK !== $response->getStatusCode()) {
            throw new ApiException($response->getContent(false));
        }

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
     * @throws TransportExceptionInterface|ApiException
     */
    public function getContract(int $id): ?Contract
    {
        $url = $this->apiUrl . '/selling/model/contract/read?action=getContract&contract_id=' . $id . '&j_token=' . $this->token . '&licenseId=' . $this->licenseId;
        $response = $this->httpClient->request('GET', $url);

        if (Response::HTTP_OK !== $response->getStatusCode()) {
            throw new ApiException($response->getContent(false));
        }

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
        if (Response::HTTP_OK !== $response->getStatusCode()) {
            throw new \Exception($response->getContent(false));
        }

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

        if (Response::HTTP_OK !== $response->getStatusCode()) {
            throw new \Exception($response->getContent(false));
        }

        return json_decode($response->getContent(),true);

    }

}