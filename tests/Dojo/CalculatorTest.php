<?php
declare(strict_types = 1);


namespace Dojo;


use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddZeroOnEmptyString(): void {
        $numbers = '';
        $calculator = new Calculator();
        $result = $calculator->add($numbers);
        self::assertEquals(0, $result);
    }

    public  function testAddOneNumber() : void{
        $currentNumber = '1';
        $calculator = new Calculator();
        $result = $calculator->add($currentNumber);
        self::assertEquals(1, $result);
    }

    public function testAddTwoNumbers()
    {
        $numbers = '1,2';
        $calculator = new Calculator();
        $result = $calculator->add($numbers);
        self::assertEquals(3, $result);
    }

    public function testAddUnknownAmountOfNumbers()
    {
        $numbers = '1,2,5,12';
        $calculator = new Calculator();
        $result = $calculator->add($numbers);
        self::assertEquals(20, $result);
    }

    public function testAddNewLines()
    {
        $numbers = '1\n2,3';
        $calculator = new Calculator();
        $result = $calculator->add($numbers);
        self::assertEquals(6, $result);
    }

    public function testAddNewlineOtherPosition()
    {
        $numbers = '1,2\n3';
        $calculator = new Calculator();
        $result = $calculator->add($numbers);
        self::assertEquals(6, $result);
    }

    public function testChangeDefaultDelimeter()
    {
        $numbers = '//;\n1;2';
        $calculator = new Calculator();
        $result = $calculator->add($numbers);
        self::assertEquals(3, $result);
    }
}
