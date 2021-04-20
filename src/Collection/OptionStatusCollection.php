<?php

namespace QH\Sellandsign\Collection;

use QH\Sellandsign\DTO\OptionStatus;

class OptionStatusCollection extends AbstractCollection
{
    public function add(OptionStatus $option)
    {
        $this->data[] = $option;
    }
}