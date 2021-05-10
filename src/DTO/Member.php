<?php

namespace QH\Sellandsign\DTO;

class Member
{
    private $email;
    private $company;
    private $delete = false;
    private $DisplayName;
    private $firstname;
    private $isGuest = true;
    private $hasValidLicense;
    private $id = 0;
    private $isBusinessGuest = false;
    private $isContributor = false;
    private $isLicenseAdmin = false;
    private $isManager = false;
    private $isReader = false;
    private $jobtitle;
    private $phone;
    private $surname;
    private $username;
    private $workplace;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
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
    public function setCompany($company): self
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDelete(): bool
    {
        return $this->delete;
    }

    /**
     * @param bool $delete
     */
    public function setDelete(bool $delete): self
    {
        $this->delete = $delete;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }

    /**
     * @param mixed $DisplayName
     */
    public function setDisplayName($DisplayName): self
    {
        $this->DisplayName = $DisplayName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return bool
     */
    public function isGuest(): bool
    {
        return $this->isGuest;
    }

    /**
     * @param bool $isGuest
     */
    public function setIsGuest(bool $isGuest): self
    {
        $this->isGuest = $isGuest;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHasValidLicense()
    {
        return $this->hasValidLicense;
    }

    /**
     * @param mixed $hasValidLicense
     */
    public function setHasValidLicense($hasValidLicense): self
    {
        $this->hasValidLicense = $hasValidLicense;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBusinessGuest(): bool
    {
        return $this->isBusinessGuest;
    }

    /**
     * @param bool $isBusinessGuest
     */
    public function setIsBusinessGuest(bool $isBusinessGuest): self
    {
        $this->isBusinessGuest = $isBusinessGuest;
        return $this;
    }

    /**
     * @return bool
     */
    public function isContributor(): bool
    {
        return $this->isContributor;
    }

    /**
     * @param bool $isContributor
     */
    public function setIsContributor(bool $isContributor): self
    {
        $this->isContributor = $isContributor;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLicenseAdmin(): bool
    {
        return $this->isLicenseAdmin;
    }

    /**
     * @param bool $isLicenseAdmin
     */
    public function setIsLicenseAdmin(bool $isLicenseAdmin): self
    {
        $this->isLicenseAdmin = $isLicenseAdmin;
        return $this;
    }

    /**
     * @return bool
     */
    public function isManager(): bool
    {
        return $this->isManager;
    }

    /**
     * @param bool $isManager
     */
    public function setIsManager(bool $isManager): self
    {
        $this->isManager = $isManager;
        return $this;
    }

    /**
     * @return bool
     */
    public function isReader(): bool
    {
        return $this->isReader;
    }

    /**
     * @param bool $isReader
     */
    public function setIsReader(bool $isReader): self
    {
        $this->isReader = $isReader;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJobtitle()
    {
        return $this->jobtitle;
    }

    /**
     * @param mixed $jobtitle
     */
    public function setJobtitle($jobtitle): self
    {
        $this->jobtitle = $jobtitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): self
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): self
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorkplace()
    {
        return $this->workplace;
    }

    /**
     * @param mixed $workplace
     */
    public function setWorkplace($workplace): self
    {
        $this->workplace = $workplace;
        return $this;
    }



}