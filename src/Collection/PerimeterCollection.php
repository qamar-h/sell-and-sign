<?php

namespace QH\Sellandsign\Collection;

use QH\Sellandsign\DTO\Perimeter;

class PerimeterCollection extends AbstractCollection
{
    public function add(Perimeter $perimeter)
    {
        $this->data[] = $perimeter;
    }
}