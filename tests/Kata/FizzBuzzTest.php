<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;
    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }
  
    public function testNumber1returnstring1(): void
    {
        $actual = '1';
        $number = new NumberObject();
        $expected = $number->toString(1);
        $this->assertSame($actual, $expected);
    }
      
    public function testNumber2returnstring2(): void
    {
        $actual = '2';
        $number = new NumberObject();
        $expected = $number->toString(2);
        $this->assertSame($actual, $expected);
    }

    public function testNumber4returnstring4(): void
    {
        $actual = '4';
        $number = new NumberObject();
        $expected = $number->toString(4);
        $this->assertSame($actual, $expected);
    }

    public function testNumber98returnstring98(): void
    {
        $actual = '98';
        $number = new NumberObject();
        $expected = $number->toString(98);
        $this->assertSame($actual, $expected);
    }

    public function testNumber3returnstringFizz(): void
    {
        $actual = 'Fizz';
        $number = new NumberObject();
        $expected = $number->toString(3);
        $this->assertSame($actual, $expected);
    }

    public function testNumber6returnstringFizz(): void
    {
        $actual = 'Fizz';
        $number = new NumberObject();
        $expected = $number->toString(6);
        $this->assertSame($actual, $expected);
    }

    public function testNumber9returnstringFizz(): void
    {
        $actual = 'Fizz';
        $number = new NumberObject();
        $expected = $number->toString(9);
        $this->assertSame($actual, $expected);
    }

    public function testNumber99returnstringFizz(): void
    {
        $actual = 'Fizz';
        $number = new NumberObject();
        $expected = $number->toString(99);
        $this->assertSame($actual, $expected);
    }

    public function testNumber5returnstringBuzz(): void
    {
        $actual = 'Buzz';
        $number = new NumberObject();
        $expected = $number->toString(5);
        $this->assertSame($actual, $expected);
    }

    public function testNumber10returnstringBuzz(): void
    {
        $actual = 'Buzz';
        $number = new NumberObject();
        $expected = $number->toString(10);
        $this->assertSame($actual, $expected);
    }

    public function testNumber100returnstringBuzz(): void
    {
        $actual = 'Buzz';
        $number = new NumberObject();
        $expected = $number->toString(100);
        $this->assertSame($actual, $expected);
    }

    public function testNumber15returnstringFizzBuzz(): void
    {
        $actual = 'FizzBuzz';
        $number = new NumberObject();
        $expected = $number->toString(15);
        $this->assertSame($actual, $expected);
    }

    public function testNumber30returnstringFizzBuzz(): void
    {
        $actual = 'FizzBuzz';
        $number = new NumberObject();
        $expected = $number->toString(30);
        $this->assertSame($actual, $expected);
    }
    
}
