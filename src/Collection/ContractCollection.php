<?php

namespace QH\Sellandsign\Collection;

use QH\Sellandsign\DTO\Contract;

class ContractCollection extends AbstractCollection
{
    public function add(Contract $contract)
    {
        $this->data[] = $contract;
    }

    public function remove(Contract $contract)
    {
        if (is_int($key = array_search($contract, $this->data, true))) {
            unset($this->data[$key]);
        }
    }

}