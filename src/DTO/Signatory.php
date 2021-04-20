<?php

namespace QH\Sellandsign\DTO;


class Signatory
{

    private $id;
    private $contractId;
    private $contractorId;
    private $signatureMode;
    private $signatureStatus;
    private $signatureId;
    private $signatureDate;
    private $lastModificationDate;
    private $lastModificationPlace;
    private $rank;
    private $messageTitle;
    private $messageBody;

    /**
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

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
    public function getContractorId()
    {
        return $this->contractorId;
    }

    /**
     * @param mixed $contractorId
     */
    public function setContractorId($contractorId): self
    {
        $this->contractorId = $contractorId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignatureMode()
    {
        return $this->signatureMode;
    }

    /**
     * @param mixed $signatureMode
     */
    public function setSignatureMode($signatureMode): self
    {
        $this->signatureMode = $signatureMode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignatureStatus()
    {
        return $this->signatureStatus;
    }

    /**
     * @param mixed $signatureStatus
     */
    public function setSignatureStatus($signatureStatus): self
    {
        $this->signatureStatus = $signatureStatus;

        return $this;
    }

    /**
     * @return int
     */
    public function getSignatureId(): int
    {
        return $this->signatureId;
    }

    /**
     * @param mixed $signatureId
     */
    public function setSignatureId(int $signatureId): self
    {
        $this->signatureId = $signatureId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSignatureDate(): \DateTime
    {
        return $this->signatureDate;
    }

    /**
     * @param mixed $signatureDate
     */
    public function setSignatureDate(\DateTime $signatureDate): self
    {
        $this->signatureDate = $signatureDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastModificationDate(): \DateTime
    {
        return $this->lastModificationDate;
    }

    /**
     * @param \DateTime $lastModificationDate
     * @return Signatory
     */
    public function setLastModificationDate(\DateTime $lastModificationDate): self
    {
        $this->lastModificationDate = $lastModificationDate;

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
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param mixed $rank
     */
    public function setRank($rank): self
    {
        $this->rank = $rank;

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



}