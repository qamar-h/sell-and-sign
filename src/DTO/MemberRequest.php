<?php

namespace QH\Sellandsign\DTO;

class MemberRequest
{
    private $licenseId = 0;
    private $loadActorPluginData = false;
    private $searchString = "";
    private $start = 0;
    private $length = 1000;

    /**
     * @return int
     */
    public function getLicenseId(): int
    {
        return $this->licenseId;
    }

    /**
     * @param int $licenseId
     */
    public function setLicenseId(int $licenseId): self
    {
        $this->licenseId = $licenseId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLoadActorPluginData(): bool
    {
        return $this->loadActorPluginData;
    }

    /**
     * @param bool $loadActorPluginData
     */
    public function setLoadActorPluginData(bool $loadActorPluginData): self
    {
        $this->loadActorPluginData = $loadActorPluginData;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchString(): string
    {
        return $this->searchString;
    }

    /**
     * @param string $searchString
     */
    public function setSearchString(string $searchString): self
    {
        $this->searchString = $searchString;
        return $this;
    }

    /**
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @param int $start
     */
    public function setStart(int $start): self
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     */
    public function setLength(int $length): self
    {
        $this->length = $length;
        return $this;
    }



}