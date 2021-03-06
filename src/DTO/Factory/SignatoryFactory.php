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
           ->setLastModificationDate(DateFormater::sellandsignDateToDatetime($data['lastModificationDate']))
           ->setId($data['id'])
           ->setContractId($data['contractId'])
           ->setContractorId($data['contractorId'])
           ->setSignatureMode($data['signatureMode'])
           ->setSignatureStatus($data['signatureStatus'])
           ->setSignatureDate(DateFormater::sellandsignDateToDatetime($data['signatureDate']))
           ->setSignatureId(isset($data['signatureId']) &&  $data['signatureId'] != "" ? intval($data['signatureId']) : null)
           ->setRank($data['rank'])
           ->setMessageTitle($data['messageTitle'])
           ->setMessageBody($data['messageBody'])
       ;
    }

}