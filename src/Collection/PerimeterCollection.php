<?php

namespace QH\Sellandsign\Collection;

use QH\Sellandsign\DTO\Perimeter;

class PerimeterCollection extends AbstractCollection
{
    public function add(Perimeter $perimeter)
    {
        $this->data[] = $perimeter;
    }

    public function getByKey(int $key): ?Perimeter
    {
        if(isset($this->data[$key])) {
            return $this->data[$key];
        }
        return null;
    }

}