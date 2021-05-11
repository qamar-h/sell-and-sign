<?php

namespace QH\Sellandsign\Collection;

use QH\Sellandsign\DTO\Signatory;

class SignatoryCollection extends AbstractCollection
{

    public function add(Signatory $signatory)
    {
        $this->data[] = $signatory;
    }

    public function getByKey(int $key): ?Signatory
    {
        if(isset($this->data[$key])) {
            return $this->data[$key];
        }
        return null;
    }

}