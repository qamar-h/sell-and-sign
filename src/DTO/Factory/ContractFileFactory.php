<?php

namespace QH\Sellandsign\DTO\Factory;

use QH\Sellandsign\DTO\ContractFile;

class ContractFileFactory
{

    public static function fromArray(array $data): ContractFile
    {
        return  (new ContractFile)
            ->setName($data['name'] ?? null)
            ->setId($data['id'] ?? null)
            ->setOptionId($data['optionId'] ?? null)
            ->setLastModificationDate($data['lastModificationDate']?? null)
            ->setImageToken($data['imageToken'] ?? null)
            ->setLastModificationPlace($data['lastModificationPlace'] ?? null)
            ->setContentType($data['contentType'] ?? null);
    }

}