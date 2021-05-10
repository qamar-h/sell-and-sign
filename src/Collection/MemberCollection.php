<?php

namespace QH\Sellandsign\Collection;

use QH\Sellandsign\DTO\Member;

class MemberCollection extends AbstractCollection
{

    public function add(Member $contract)
    {
        $this->data[] = $contract;
    }

    public function remove(Member $contract)
    {
        if (is_int($key = array_search($contract, $this->data, true))) {
            unset($this->data[$key]);
        }
    }
}