<?php

namespace QH\Sellandsign\DTO;

class OptionStatus
{

    private $contractId;
    private $elementDefinitionId;
    private $optionType;
    private $optionId;
    private $contractPropretyId;
    private $name;
    private $value;

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
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContractId()
    {
        return $this->contractId;
    }

    /**
     * @param mixed $contractId
     */
    public function setContractId($contractId): self
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getElementDefinitionId()
    {
        return $this->elementDefinitionId;
    }

    /**
     * @param mixed $elementDefinitionId
     */
    public function setElementDefinitionId($elementDefinitionId): self
    {
        $this->elementDefinitionId = $elementDefinitionId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOptionType()
    {
        return $this->optionType;
    }

    /**
     * @param mixed $optionType
     */
    public function setOptionType($optionType): self
    {
        $this->optionType = $optionType;

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
    public function getContractPropretyId()
    {
        return $this->contractPropretyId;
    }

    /**
     * @param mixed $contractPropretyId
     */
    public function setContractPropretyId($contractPropretyId): self
    {
        $this->contractPropretyId = $contractPropretyId;

        return $this;
    }


}