<?php

namespace QH\Sellandsign\Interfaces;

use QH\Sellandsign\Collection\ContractFileCollection;

interface FileLoaderInterface
{
    public function getFilesForContract(int $contractId): ContractFileCollection;

    public function loadFile(string $imageToken): string;

    public function getEvidences(int $contractId): string;

    public function getContractFileSigned(int $contractId): string;

    public function getCurrentDocumentForContract(int $contractId): string;

}