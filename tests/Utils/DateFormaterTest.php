<?php

use PHPUnit\Framework\TestCase;
use QH\Sellandsign\Utils\DateFormater;

class DateFormaterTest extends TestCase
{

    private const TIME_EXAMPLE = 1594393715359;
    PRIVATE CONST DATE_EXEMPLE = '2020-07-10';

    public function testSellandsignDateToDatetimeSuccess()
    {
        $dateFormated = DateFormater::sellandsignDateToDatetime(self::TIME_EXAMPLE);
        $this->assertInstanceOf(\Datetime::class,$dateFormated);
    }

    public function testSellandsignDateToDatetimeCorrectlyReturnsTheDate()
    {
        $dateFormated = DateFormater::sellandsignDateToDatetime(self::TIME_EXAMPLE);
        $this->assertEquals(self::DATE_EXEMPLE,$dateFormated->format('Y-m-d'));
    }


}