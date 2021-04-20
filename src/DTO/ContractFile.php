<?php

namespace QH\Sellandsign\DTO;

class ContractFile
{

    private $id;
    private $optionId;
    private $lastModificationDate;
    private $imageToken;
    private $lastModificationPlace;
    private $name;
    private $contentType;

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
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * @param mixed $optionId
     */
    public function setOptionId($optionId): self
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastModificationDate()
    {
        return $this->lastModificationDate;
    }

    /**
     * @param mixed $lastModificationDate
     */
    public function setLastModificationDate($lastModificationDate): self
    {
        $this->lastModificationDate = $lastModificationDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageToken()
    {
        return $this->imageToken;
    }

    /**
     * @param mixed $imageToken
     */
    public function setImageToken($imageToken): self
    {
        $this->imageToken = $imageToken;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastModificationPlace()
    {
        return $this->lastModificationPlace;
    }

    /**
     * @param mixed $lastModificationPlace
     */
    public function setLastModificationPlace($lastModificationPlace): self
    {
        $this->lastModificationPlace = $lastModificationPlace;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param mixed $contentType
     */
    public function setContentType($contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }



}