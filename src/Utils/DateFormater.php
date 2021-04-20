<?php

namespace QH\Sellandsign\Utils;

class DateFormater
{

    public static function sellandsigneDateToDatetime(int $date): \DateTime
    {
        return (new \DateTime())->setTimestamp($date / 1000 );
    }

}