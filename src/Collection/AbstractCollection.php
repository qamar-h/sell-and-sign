<?php

namespace QH\Sellandsign\Collection;

abstract class AbstractCollection implements \Countable, \IteratorAggregate
{

    protected $data = [];

    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }

    public function count()
    {
        return count($this->data);
    }

}