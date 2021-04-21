<?php

namespace QH\Sellandsign\DTO\Factory;

use QH\Sellandsign\Collection\OptionStatusCollection;
use QH\Sellandsign\Collection\PerimeterCollection;
use QH\Sellandsign\DTO\{Contract,Company,Contractor,Perimeter,OptionStatus};
use QH\Sellandsign\Utils\DateFormater;

class ContractFactory
{

    public static function fromArray(array $data)
    {

        $contract = new Contract;
        $company = new Company;
        $contractor = new Contractor;

        /**
         * Company
         */
        $company
            ->setCity($data['city'] ?? null)
            ->setName($data['companyName'] ?? null);

        /**
         * Contractor
         */
        $contractor
            ->setName($data['contractorName'] ?? null);

        /**
         * Customer
         */
        if(isset($data['customer'])) {
            $contract->setCustomer(CustomerFactory::fromArray($data['customer']));
        }

        /**
         * PerimeterList
         */
        if (isset($data['perimeterList']) && isset($data['perimeterList']['elements'])) {

            $perimeterCollection = new PerimeterCollection;
            $perimeterData = $data['perimeterList']['elements'];

            foreach ($perimeterData as $perimeter) {
                $perimeterObject = (new Perimeter)
                    ->setId($perimeter['id'])
                    ->setKey($perimeter['key'])
                    ->setSyncTimer($perimeter['syncTimer'])
                    ->setDescription($perimeter['description'])
                ;
                $perimeterCollection->add($perimeterObject);
            }

            $contract->setPerimeterList($perimeterCollection);
        }


        if(isset($data['optionStatus'])) {

            $optionStatusCollection = new OptionStatusCollection;
            $optionStatusData = $data['optionStatus'];

            foreach ($optionStatusData as $optionStatus) {
                $optionStatusObject  = (new OptionStatus)
                    ->setContractId($optionStatus['contractId'])
                    ->setElementDefinitionId($optionStatus['elementDefinitionId'])
                    ->setOptionType($optionStatus['optionType'])
                    ->setOptionId($optionStatus['optionId'])
                    ->setContractPropretyId($optionStatus['contractPropertyId']);

                if(isset($optionStatus['name'])) {
                    $optionStatusObject->setName($optionStatus['name']);
                }

                if(isset($optionStatus['value'])) {
                    $optionStatusObject->setValue($optionStatus['value']);
                }

                $optionStatusCollection->add($optionStatusObject);
            }

            $contract->setOptionStatus($optionStatusCollection);

        }

        $contract
            ->setContractor($contractor)
            ->setCompany($company)
            ->setId($data['id'])
            ->setDate(DateFormater::sellandsignDateToDatetime($data['date']))
            ->setTypeName($data['contractTypeName'] ?? null)
            ->setDefinitionDocumentToken($data['contractDefinitionDocumentToken'] ?? null)
            ->setDefinitionId($data['contractDefinitionId'])
            ->setStatus($data['status'])
            ->setTransactionId($data['transactionId'])
            ->setVendorEmail($data['vendorEmail'])
            ->setClosed($data['closed'])
            ->setClosedDate(DateFormater::sellandsignDateToDatetime($data['closedDate']))
            ->setCanceledReason($data['canceledReason'])
            ->setMessageTitle($data['messageTitle'])
            ->setMessageBody($data['messageBody'])
            ->setOptionsList($data['optionsList'] ?? [])
        ;

        return $contract;
    }

}