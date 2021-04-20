<?php

namespace QH\Sellandsign;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class Configuration
{

    private $apiUrl;
    private $token;
    private $licenseId;
    private $httpclient;

    /**
     * @return mixed
     */
    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }

    /**
     * @param string $apiUrl
     * @return Configuration
     */
    public function setApiUrl(string $apiUrl): self
    {
        $this->apiUrl = $apiUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return Configuration
     */
    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return integer
     */
    public function getLicenseId(): int
    {
        return $this->licenseId;
    }

    /**
     * @param integer $licenseId
     * @return Configuration
     */
    public function setLicenseId(int $licenseId): self
    {
        $this->licenseId = $licenseId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHttpclient() : HttpClientInterface
    {
        return $this->httpclient;
    }

    /**
     * @param HttpClientInterface $httpclient
     * @return Configuration
     */
    public function setHttpclient(HttpClientInterface $httpclient): self
    {
        $this->httpclient = $httpclient;

        return $this;
    }



}