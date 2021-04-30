<?php

use PHPUnit\Framework\TestCase;

use QH\Sellandsign\{Collection\ContractCollection,
    Configuration,
    ContractLoader,
    Exception\ContractsStructureException};
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use QH\Sellandsign\DTO\{Contract,Request};
use QH\Sellandsign\Exception\ApiException;

class ContractLoaderTest extends TestCase
{

    private $configuration;

    private $request;

    public function setUp(): void
    {
        parent::setUp();
        $this->configurationMock();
        $this->request = $this->getMockBuilder(Request::class)
            ->getMock();

    }

    public function testGetContractsThrowApiExceptionError()
    {
        $this->responseReturnError500();
        $contractLoader = new ContractLoader($this->configuration);
        $this->expectException(ApiException::class);
        $contractLoader->getContracts($this->request);
    }

    public function testGetContractsThrowContractsStructureExceptionError()
    {
        $this->responseReturnArray('{"customerProperties":{},"elementsError":[]}');
        $contractLoader = new ContractLoader($this->configuration);
        $this->expectException(ContractsStructureException::class);
        $contractLoader->getContracts($this->request);
    }

    public function testGetContractsSuccess()
    {
        $this->responseReturnArray('{"customerProperties":{},"elements":[]}');
        $contractLoader = new ContractLoader($this->configuration);
        $contracts = $contractLoader->getContracts($this->request);
        $this->assertInstanceOf(ContractCollection::class,$contracts);
    }

    public function testGetContractThrowApiExceptionError() {
        $this->responseReturnError500();
        $contractLoader = new ContractLoader($this->configuration);
        $this->expectException(ApiException::class);
        $contractLoader->getContract(1742);
    }

    public function testGetContractReturnNull()
    {
        $this->responseReturnArray(null);
        $contractLoader = new ContractLoader($this->configuration);
        $contract = $contractLoader->getContract(1742);
        $this->assertEquals(null,$contract);
    }

    public function testGetContractSuccess() {
        $contractJson = require_once __DIR__ . "/data/ContractJson.php";
        $this->responseReturnArray($contractJson);
        $contractLoader = new ContractLoader($this->configuration);
        $contract = $contractLoader->getContract(1742);
        $this->assertInstanceOf(Contract::class,$contract);
    }


    private function configurationMock()
    {
        $this->configuration = $this->getMockBuilder(Configuration::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->configuration->method('getApiUrl')->willReturn('http://someurl');
        $this->configuration->method('getToken')->willReturn('someToken');
        $this->configuration->method('getLicenseId')->willReturn(0000);
        //$this->configuration->method('getHttpclient')->willReturn($this->httpClient);
    }

    private function responseReturnError500() {
        $reponse = new MockResponse('',['http_code' => 500]);
        $httpClient = new MockHttpClient([$reponse]);
        $this->configuration->method('getHttpclient')->willReturn($httpClient);
    }

    private function responseReturnArray(?string $data) {
        $reponse = new MockResponse($data);
        $httpClient = new MockHttpClient([$reponse]);
        $this->configuration->method('getHttpclient')->willReturn($httpClient);
    }


}





