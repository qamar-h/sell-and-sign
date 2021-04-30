<?php

namespace QH\Sellandsign\Interfaces;

use QH\Sellandsign\Collection\ContractCollection;
use QH\Sellandsign\DTO\Contract;
use QH\Sellandsign\DTO\Request;

interface ContractLoaderInterface
{
    public function getContracts(Request $request): ContractCollection;

    public function getContract(int $id): ?Contract;
}