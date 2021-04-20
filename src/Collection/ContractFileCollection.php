<?php

namespace QH\Sellandsign\Collection;

use QH\Sellandsign\DTO\ContractFile;

class ContractFileCollection extends AbstractCollection
{

    public function add(ContractFile $contractFile)
    {
        $this->data[] = $contractFile;
    }

}