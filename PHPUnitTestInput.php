<?php
declare(strict_types=1);

class CalculatorTestInput extends PHPUnit_Framework_TestCase
{
    public function testAddInput($n1, $n2, $expected)
    {
        $counting = new \IW\Workshop\Calculator();
        $sum = $counting->add($n1, $n2);
        $this->assertSame($expected, $sum);
    }
    public function testDivideInput($n1, $n2, $expected)
    {
        $counting = new \IW\Workshop\Calculator();
        $sum = $counting->divide($n1, $n2);
        $this->assertSame($expected, $sum);
    }
}