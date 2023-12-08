<?php

use PHPUnit\Framework\TestCase;

require './Calc.php';

class CalcTest extends TestCase
{
    public function test_sum1()
    {
        $calc = new Calc();
        $result = $calc->sum(1, 2);
        $this->assertEquals(3, $result); //este test lo pasa
    }
    public function test_sum2()
    {
        $calc = new Calc();
        $result = $calc->sum(1, -1);
        $this->assertEquals(1, $result); 
    }
}
