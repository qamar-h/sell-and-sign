<?php

use PHPUnit\Framework\TestCase;
use QH\Sellandsign\Utils\DateFormater;

class DateFormaterTest extends TestCase
{

    public function testSellandsignDateToDatetimeSuccess()
    {
        $dateFormated = DateFormater::sellandsignDateToDatetime(1594393715359);
        $this->assertInstanceOf(\Datetime::class,$dateFormated);
    }

    public function testSellandsignDateToDatetimeCorrectlyReturnsTheDate()
    {
        $dateFormated = DateFormater::sellandsignDateToDatetime(1594393715359);
        $this->assertEquals('2020-07-10',$dateFormated->format('Y-m-d'));
    }

}