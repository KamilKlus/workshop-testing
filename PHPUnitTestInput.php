<?php
declare(strict_types=1);

class CalculatorTestInput extends PHPUnit_Framework_TestCase
{
    //test vstupních hodnot pro sčítání
    public function testAddInput($value1, $value2, $expected)
    {
        $counting = new \IW\Workshop\Calculator();
        $sum = $counting->add($value1, $value2);
        $this->assertSame($expected, $sum);
    }

    //test vstupních hodnot pr odělení
    public function testDivideInput($value1, $value2, $expected)
    {
        $counting = new \IW\Workshop\Calculator();
        $sum = $counting->divide($value1, $value2);
        $this->assertSame($expected, $sum);
    }
}