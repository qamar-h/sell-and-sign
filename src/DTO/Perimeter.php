<?php

namespace QH\Sellandsign\DTO;

class Perimeter
{

    private $id;

    private $key;

    private $description;

    private $syncTimer;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSyncTimer()
    {
        return $this->syncTimer;
    }

    /**
     * @param mixed $syncTimer
     */
    public function setSyncTimer($syncTimer): self
    {
        $this->syncTimer = $syncTimer;

        return $this;
    }



}