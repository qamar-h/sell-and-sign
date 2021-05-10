<?php

namespace QH\Sellandsign\DTO\Factory;

use QH\Sellandsign\DTO\Customer;
use QH\Sellandsign\Utils\DateFormater;

class CustomerFactory
{

    public static function fromArray(array $data)
    {
        $customerData = $data;
        return (new Customer)
            ->setCity($customerData['city'])
            ->setNumber($customerData['number'])
            ->setActorId($customerData['actorId'])
            ->setSyncTimer($customerData['syncTimer'])
            ->setCivility($customerData['civility'])
            ->setFirstname($customerData['firstname'])
            ->setLastname($customerData['lastname'])
            ->setAddress1($customerData['address1'])
            ->setAddress2($customerData['address2'])
            ->setPostalCode($customerData['postalCode'])
            ->setPhone($customerData['phone'])
            ->setEmail($customerData['email'])
            ->setCellPhone($customerData['cellPhone'])
            ->setJobTitle($customerData['jobTitle'])
            ->setRegistrationNumber($customerData['registrationNumber'])
            ->setCustomerCode($customerData['customerCode'])
            ->setCountry($customerData['country'])
            ->setCreationDate(DateFormater::sellandsignDateToDatetime($customerData['creationDate']))
        ;
    }

}