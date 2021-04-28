<?php

use PHPUnit\Framework\TestCase;

use QH\Sellandsign\{Configuration, ContractLoader};
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use QH\Sellandsign\DTO\Contract;

class ContractLoaderTest extends TestCase
{

    private $configuration;

    public function setUp(): void
    {
        parent::setUp();
        $this->configurationMock();
    }

    public function testGetContractException() {
        $this->responseReturnError500();
        $contractLoader = new ContractLoader($this->configuration);
        $this->expectException(\Exception::class);
        $contractLoader->getContract(1742);
    }

    public function testGetContractSuccess() {
        $contractJson = require_once __DIR__ . "/data/contractJson.php";
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

    private function responseReturnArray(string $data) {
        $reponse = new MockResponse($data);
        $httpClient = new MockHttpClient([$reponse]);
        $this->configuration->method('getHttpclient')->willReturn($httpClient);
    }


}