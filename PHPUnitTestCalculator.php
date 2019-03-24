<?php
declare(strict_types=1);

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    //test sčítání
    public function testAdd()
    {
        $counting = new \IW\Workshop\Calculator();
        $sum = $counting->add(5.5, 5.5);
        $result = 11.0;
        $this->assertSame($result, $sum); // false
    }

    //test dělení
    public function testDivide()
    {
        $counting = new \IW\Workshop\Calculator();
        $sum = $counting->divide(10.0, 5.0);
        $result = 2.0;
        $this->assertSame($result, $sum); // false
    }
}