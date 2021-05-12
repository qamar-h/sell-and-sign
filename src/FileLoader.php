<?php

namespace QH\Sellandsign;

use QH\Sellandsign\Collection\ContractFileCollection;
use QH\Sellandsign\DTO\Factory\ContractFileFactory;
use QH\Sellandsign\Exception\ContractFileException;
use QH\Sellandsign\Exception\ExceptionHandler;
use QH\Sellandsign\Interfaces\FileLoaderInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class FileLoader extends AbstractSellandsign implements FileLoaderInterface
{

    /**
     * @param int $contractId
     * @return ContractFileCollection
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface|ContractFileException
     */
    public function getFilesForContract(int $contractId): ContractFileCollection
    {
        $url = $this->apiUrl . '/selling/model/picture/list?action=getPicturesForContract&contract_id=' . $contractId . '&j_token=' . $this->token . '&licenseId=' . $this->licenseId;
        $response = $this->httpClient->request('GET', $url);

        ExceptionHandler::handleApiErrors($response);

        $result = json_decode($response->getContent(), true);

        if (!isset($result['elements'])) {
            throw new ContractFileException("Impossible to recover the files");
        }

        $contractFileCollection = new ContractFileCollection;

        foreach ($result['elements'] as $contractFileArray) {
            $contractFileCollection->add(ContractFileFactory::fromArray($contractFileArray));
        }

        return $contractFileCollection;

    }

    /**
     * @param string $imageToken
     * @return string
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function loadFile(string $imageToken): string
    {
        $url = $this->apiUrl . '/selling/do?m=loadPicture&image_token=' . $imageToken . '&j_token=' . $this->token . '&licenseId=' . $this->licenseId;
        $response = $this->httpClient->request('GET', $url);

        ExceptionHandler::handleApiErrors($response);

        $content = "";
        foreach ($this->httpClient->stream($response) as $chunk) {
            $content .= $chunk->getContent();
        }

        return $content;
    }

    /**
     * @param int $contractId
     * @return string
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function getEvidences(int $contractId): string
    {

        $url = $this->apiUrl . '/selling/do?m=getEvidences&contract_id=' . $contractId . '&j_token=' . $this->token . '&licenseId=' . $this->licenseId;
        $response = $this->httpClient->request('GET', $url, ['headers' => ['Content-Type' => 'application/zip']]);

        ExceptionHandler::handleApiErrors($response);

        $content = "";

        foreach ($this->httpClient->stream($response) as $chunk) {
            $content .= $chunk->getContent();
        }

        return $content;

    }


    /**
     * @param int $contractId
     * @return string
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function getContractFileSigned(int $contractId): string
    {

        $url = $this->apiUrl . '/selling/do?m=getSignedContract&contract_id=' . $contractId . '&j_token=' . $this->token . '&licenseId=' . $this->licenseId;
        $response = $this->httpClient->request('GET', $url, ['headers' => ['Content-Type' => 'application/pdf']]);

        ExceptionHandler::handleApiErrors($response);

        $content = "";

        foreach ($this->httpClient->stream($response) as $chunk) {
            $content .= $chunk->getContent();
        }

        return $content;

    }

    /**
     * @param int $contractId
     * @return string
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function getCurrentDocumentForContract(int $contractId): string
    {

        $url = $this->apiUrl . '/selling/do?m=getCurrentDocumentForContract&id=' . $contractId . '&j_token=' . $this->token . '&licenseId=' . $this->licenseId;
        $response = $this->httpClient->request('GET', $url, ['headers' => ['Content-Type' => 'application/pdf']]);

        ExceptionHandler::handleApiErrors($response);

        $content = "";

        foreach ($this->httpClient->stream($response) as $chunk) {
            $content .= $chunk->getContent();
        }

        return $content;

    }


}