<?php

namespace QH\Sellandsign;

class AbstractSellandsign
{

    protected $apiUrl;
    protected $token;
    protected $licenseId;
    protected $httpClient;

    /**
     * Sellandsign constructor.
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->apiUrl = $configuration->getApiUrl();
        $this->token = $configuration->getToken();
        $this->licenseId = $configuration->getLicenseId();
        $this->httpClient = $configuration->getHttpclient();
    }


}
