<?php 

namespace QH\Sellandsign\DTO;

use QH\Sellandsign\Collection\OptionStatusCollection;
use QH\Sellandsign\Collection\PerimeterCollection;

class Contract
{

    public const CONTRACT_SELECTOR_ALL = 0;
    public const CONTRACT_SELECTOR_IN_PROGRESS = 1;
    public const CONTRACT_SELECTOR_SIGNED_AND_NOT_VALID = 2;
    public const CONTRACT_SELECTOR_VALID = 3;
    public const CONTRACT_SELECTOR_ARCHIVED = 4;
    public const CONTRACT_SELECTOR_ABANDONED = 5;


    private $id;
    private $date;
    private $closed;
    private $transactionId;
    private $status;
    private $definitionId;
    private $definitionDocumentToken;
    private $typeName;
    private $vendorEmail;
    private $perimeterList;
    private $customer;
    private $contractor;
    private $company;
    private $closedDate;
    private $canceledReason;
    private $messageTitle;
    private $messageBody;
    private $optionStatus;
    private $optionsList = [];


    /**
     * @return array
     */
    public function getOptionsList(): array
    {
        return $this->optionsList;
    }

    /**
     * @param array $optionsList
     */
    public function setOptionsList(array $optionsList): self
    {
        $this->optionsList = $optionsList;

        return $this;
    }

    /**
     * @return OptionStatusCollection
     */
    public function getOptionStatus(): OptionStatusCollection
    {
        return $this->optionStatus;
    }

    /**
     * @param OptionStatusCollection $optionStatus
     */
    public function setOptionStatus(OptionStatusCollection $optionStatus): self
    {
        $this->optionStatus = $optionStatus;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getClosedDate()
    {
        return $this->closedDate;
    }

    /**
     * @param mixed $closedDate
     */
    public function setClosedDate($closedDate): self
    {
        $this->closedDate = $closedDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanceledReason()
    {
        return $this->canceledReason;
    }

    /**
     * @param mixed $canceledReason
     */
    public function setCanceledReason($canceledReason): self
    {
        $this->canceledReason = $canceledReason;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessageTitle()
    {
        return $this->messageTitle;
    }

    /**
     * @param mixed $messageTitle
     */
    public function setMessageTitle($messageTitle): self
    {
        $this->messageTitle = $messageTitle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessageBody()
    {
        return $this->messageBody;
    }

    /**
     * @param mixed $messageBody
     */
    public function setMessageBody($messageBody): self
    {
        $this->messageBody = $messageBody;

        return $this;
    }


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
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * @param mixed $closed
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param mixed $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

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
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefinitionId()
    {
        return $this->definitionId;
    }

    /**
     * @param mixed $definitionId
     */
    public function setDefinitionId($definitionId)
    {
        $this->definitionId = $definitionId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefinitionDocumentToken()
    {
        return $this->definitionDocumentToken;
    }

    /**
     * @param mixed $definitionDocumentToken
     */
    public function setDefinitionDocumentToken($definitionDocumentToken)
    {
        $this->definitionDocumentToken = $definitionDocumentToken;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * @param mixed $typeName
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVendorEmail()
    {
        return $this->vendorEmail;
    }

    /**
     * @param mixed $vendorEmail
     */
    public function setVendorEmail($vendorEmail)
    {
        $this->vendorEmail = $vendorEmail;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getPerimeterList(): PerimeterCollection
    {
        return $this->perimeterList;
    }

    /**
     * @param mixed $perimeterList
     */
    public function setPerimeterList(PerimeterCollection $perimeterList)
    {
        $this->perimeterList = $perimeterList;
        return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return Contract
     */
    public function getContractor(): Contractor
    {
        return $this->contractor;
    }

    /**
     * @param Contractor $contractor
     */
    public function setContractor(Contractor $contractor)
    {
        $this->contractor = $contractor;
        return $this;
    }

    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }

    /**
     * @param Company $company
     */
    public function setCompany(Company $company)
    {
        $this->company = $company;
        return $this;
    }







}
