<?php

namespace QH\Sellandsign\DTO;

class Request
{

    private $contractSelector = Contract::CONTRACT_SELECTOR_ALL;
    private $contractId;
    private $vendor;
    private $company;
    private $contractDefinitionId;
    private $startDate = 0;
    private $endDate = 0;
    private $customer;
    private $city;
    private $column = 1;
    private $direction = 1;
    private $offset = 0;
    private $size = 150;
    private $bundleId;
    private $perimeterId;
    private $status;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getPerimeterId()
    {
        return $this->perimeterId;
    }

    /**
     * @param mixed $perimeterId
     */
    public function setPerimeterId($perimeterId)
    {
        $this->perimeterId = $perimeterId;
    }

    /**
     * @return int
     */
    public function getContractSelector(): int
    {
        return $this->contractSelector;
    }

    /**
     * @param int $contractSelector
     */
    public function setContractSelector(int $contractSelector)
    {
        $this->contractSelector = $contractSelector;
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
    public function setContractId($contractId)
    {
        $this->contractId = $contractId;
    }

    /**
     * @return mixed
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param mixed $vendor
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getContractDefinitionId()
    {
        return $this->contractDefinitionId;
    }

    /**
     * @param mixed $contractDefinitionId
     */
    public function setContractDefinitionId($contractDefinitionId)
    {
        $this->contractDefinitionId = $contractDefinitionId;
    }

    /**
     * @return int
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }

    /**
     * @param int $startDate
     */
    public function setStartDate(int $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return int
     */
    public function getEndDate(): int
    {
        return $this->endDate;
    }

    /**
     * @param int $endDate
     */
    public function setEndDate(int $endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return int
     */
    public function getColumn(): int
    {
        return $this->column;
    }

    /**
     * @param int $column
     */
    public function setColumn(int $column)
    {
        $this->column = $column;
    }

    /**
     * @return int
     */
    public function getDirection(): int
    {
        return $this->direction;
    }

    /**
     * @param int $direction
     */
    public function setDirection(int $direction)
    {
        $this->direction = $direction;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->offset = $offset;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getBundleId()
    {
        return $this->bundleId;
    }

    /**
     * @param mixed $bundleId
     */
    public function setBundleId($bundleId)
    {
        $this->bundleId = $bundleId;
    }




}