## About this package
This package offers you some features in order to interact with the REST API of the SellAndSign group
https://www.sellandsign.com

## Installation with composer
```bash
composer require coriolis/sell-and-sign
```

## The features 
ContractLoader
* getContracts > Allows you to retrieve all the available contracts
* getContract > Allows you to retrieve a contract from its ID
* getContractorsAbout > Allows you to retrieve all the signatories of a contract
* closeTransaction > Used to close the transaction of a contract 

FileLoader
* getFilesForContract
* loadFile
* getEvidences
* getContractFileSigned
* getCurrentDocumentForContract

MemberLoader
* getMembers

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


## FileLoader
```php
use QH\Sellandsign\{
    Configuration,
    FileLoader
};
use Symfony\Component\HttpClient\HttpClient;

//init the configuration
$configuration = (new Configuration)
    ->setApiUrl("THE_API_URL")
    ->setHttpclient(HttpClient::create())
    ->setToken("THE_TOEKN")
    ->setLicenseId("THE_LICENSE_ID");
    
$fileLoader = new FileLoader($configuration);

$fileContent = $this->fileLoader->getCurrentDocumentForContract(1234); //return the content of the file in string

//You can write a file with the content
$filename = "someName.pdf";
$pathOfDirectory = "/path/of/directory/";
$file = fopen($pathOfDirectory . $filename , 'w');
fwrite($file, $fileContent);
fclose($fileHandler);

```


## MemberLoader
```php
use QH\Sellandsign\{
    Configuration,
    MemberLoader,
    DTO\MemberRequest
};
use Symfony\Component\HttpClient\HttpClient;

//init the configuration
$configuration = (new Configuration)
    ->setApiUrl("THE_API_URL")
    ->setHttpclient(HttpClient::create())
    ->setToken("THE_TOEKN")
    ->setLicenseId("THE_LICENSE_ID");
    
$memberLoader = new MemberLoader($configuration);

$request = new MemberRequest();
$members = $memberLoader->getMembers($request); //return an instance of MemberCollection

//You can do a search, for example a search on an email 
//it will be necessary to modify the request 
$request = new MemberRequest();
$request->setSearchString("your-email@example.com");
$members = $memberLoader->getMembers($request); //return an instance of MemberCollection

```
