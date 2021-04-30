## About this package
This package offers you some features in order to interact with the REST API of the SellAndSign group
https://www.sellandsign.com

## The features 
ContractLoader
* getContracts > Allows you to retrieve all the available contracts
* getContract > Allows you to retrieve a contract from its ID
* getContractorsAbout > Allows you to retrieve all the signatories of a contract
* closeTransaction > Used to close the transaction of a contract 


## ContractLoader
```php

use QH\Sellandsign\{
    Configuration,
    ContractLoader,
    DTO\Request
};
use Symfony\Component\HttpClient\HttpClient;

//init the configuration
$configuration = (new Configuration)
    ->setApiUrl("THE_API_URL")
    ->setHttpclient(HttpClient::create())
    ->setToken("THE_TOEKN")
    ->setLicenseId("THE_LICENSE_ID");
    
$contractLoader = new ContractLoader($configuration);

/**
* Retrive all contract
 */
 
//You must provide an instance of Request
$request = new Request; //this class offers you certain method to specify filters
$contracts = $contractLoader->getContracts($request); //return an instance of ContractCollection


/**
* Retrieve a contract
 */
 $contract = $contractLoader->getContract(1234); // return an instance of Contract or null

```

