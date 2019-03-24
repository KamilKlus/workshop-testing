<?php
declare(strict_types=1);

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    //test funkčnosti třídy metody DateFOrmatter
    public function testDateFormat()
    {
        $dateFormat = new \IW\Workshop\DateFormatter();
        $this->assertTrue($dateFormat->getPartOfDay() !== false);
    }
}