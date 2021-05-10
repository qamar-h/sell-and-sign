<?php

namespace QH\Sellandsign\DTO\Factory;

use QH\Sellandsign\DTO\Member;

class MemberFactory
{

    public static function fromArray(array $data)
    {
        return (new Member)
            ->setEmail($data['email'])
            ->setCompany($data['company'])
            ->setIsBusinessGuest($data['isBusinessguest'])
            ->setDelete($data['delete'])
            ->setDisplayName($data['DisplayName'])
            ->setFirstname($data['firstname'])
            ->setIsGuest($data['isGuest'])
            ->setHasValidLicense($data['hasValidLicense'])
            ->setId($data['id'])
            ->setWorkplace($data['workplace'])
            ->setUsername($data['username'])
            ->setSurname($data['surname'])
            ->setIsContributor($data['isContributor'])
            ->setIsLicenseAdmin($data['isLicenseAdmin'])
            ->setIsManager($data['isManager'])
            ->setIsReader($data['isReader'])
            ->setJobtitle($data['jobtitle'])
            ->setPhone($data['phone'])
            ;

    }

}