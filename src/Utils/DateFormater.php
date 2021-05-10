<?php

namespace QH\Sellandsign\Utils;

class DateFormater
{

    public static function sellandsignDateToDatetime(int $date): \DateTime
    {
        return (new \DateTime())->setTimestamp($date / 1000 );
    }

    public static function dateTimeToSellandsignDate(string $date = null, string $modify = null): int
    {
        $date = new \DateTime($date);
        if($modify != null ) {
            $date->modify($modify);
        }
        return intval($date->format('U')) * 1000;
    }

}