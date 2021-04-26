<?php

use PHPUnit\Framework\TestCase;

use QH\Sellandsign\{Configuration, ContractLoader};
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

class ContractLoaderTest extends TestCase
{

    private $configuration;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->configurationMock();
    }

    public function testGetContractException() {

        $reponse = new MockResponse('invalid',['response_headers' => ['HTTP/1.1 500 Internal Server Error']]);
        $httpClient = new MockHttpClient([$reponse]);
        $this->configuration->method('getHttpclient')->willReturn($httpClient);

        $contractLoader = new ContractLoader($this->configuration);
        $this->expectException(\Exception::class);

        $contractLoader->getContract(1425);

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



}