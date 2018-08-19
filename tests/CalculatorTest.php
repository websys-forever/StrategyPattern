<?php

use PHPUnit\Framework\TestCase;
use WebsysForever\Strategy\Calculator;

final class CalculatorTest extends TestCase
{
    public function testPlusTwoNumbers(): void
    {
        $sum = new Calculator('+');
        $a = mt_rand(0, 10000);
        $b = mt_rand(0, 10000);
        $this->assertEquals(
            $a + $b,
            $sum->calc($a, $b)
        );
    }

    public function testSubsTwoNumbers(): void
    {
        $sum = new Calculator('-');
        $a = mt_rand(0, 10000);
        $b = mt_rand(0, 10000);
        $this->assertEquals(
            $a - $b,
            $sum->calc($a, $b)
        );
    }

    public function testMultTwoNumbers(): void
    {
        $sum = new Calculator('*');
        $a = mt_rand(0, 10000);
        $b = mt_rand(0, 10000);
        $this->assertEquals(
            $a * $b,
            $sum->calc($a, $b)
        );
    }

    public function testDivsTwoNumbers(): void
    {
        $sum = new Calculator('/');
        $a = 36;
        $b = 7;
        $this->assertEquals(
            floor($a / $b),
            $sum->calc($a, $b)
        );
    }

    public function testDivsByZero(): void
    {
        $sum = new Calculator('/');
        $a = mt_rand(0, 10000);
        $b = mt_rand(0, 10000);
        $this->expectException(\Exception::class);
        $a = 35;
        $b = 0;
        $sum->calc($a, $b);
    }
}