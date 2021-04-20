<?php

namespace QH\Sellandsign\Collection;

use QH\Sellandsign\DTO\Signatory;

class SignatoryCollection extends AbstractCollection
{

    public function add(Signatory $signatory)
    {
        $this->data[] = $signatory;
    }

}