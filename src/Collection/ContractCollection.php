<?php

namespace QH\Sellandsign\Collection;

use QH\Sellandsign\DTO\Contract;

class ContractCollection extends AbstractCollection
{
    public function add(Contract $contract)
    {
        $this->data[] = $contract;
    }
}