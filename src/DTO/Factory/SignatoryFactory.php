<?php

namespace QH\Sellandsign\DTO\Factory;

use QH\Sellandsign\DTO\Signatory;
use QH\Sellandsign\Utils\DateFormater;

class SignatoryFactory
{

    public static function fromArray(array $data): Signatory
    {
       return (new Signatory)
           ->setLastModificationPlace($data['lastModificationPlace'])
           ->setLastModificationDate(DateFormater::sellandsigneDateToDatetime($data['lastModificationDate']))
           ->setId($data['id'])
           ->setContractId($data['contractId'])
           ->setContractorId($data['contractorId'])
           ->setSignatureMode($data['signatureMode'])
           ->setSignatureStatus($data['signatureStatus'])
           ->setSignatureDate(DateFormater::sellandsigneDateToDatetime($data['signatureDate']))
           ->setSignatureId($data['signatureId'])
           ->setRank($data['rank'])
           ->setMessageTitle($data['messageTitle'])
           ->setMessageBody($data['messageBody'])
       ;
    }

}