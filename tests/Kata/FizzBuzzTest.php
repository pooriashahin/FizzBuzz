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
  
    public function testNumber1ReturnsString1(): void
    {
        $this->number = new NumberObject('1');
        $actual = $this->number->ifDivisibleBy3Or5Or3And5orNot();
        $expected = 1;
        $this->assertSame($actual, $expected);
    }

    public function testNumber2ReturnsString2(): void
    {
        $this->number = new NumberObject('2');
        $actual = $this->number->ifDivisibleBy3Or5Or3And5orNot();
        $expected = 2;
        $this->assertSame($actual, $expected);
    }

    public function testNumber98ReturnsString98(): void
    {
        $this->number = new NumberObject('98');
        $actual = $this->number->ifDivisibleBy3Or5Or3And5orNot();
        $expected = 98;
        $this->assertSame($actual, $expected);
    }

    public function testNumber3ReturnsStringFizz(): void
    {
        $this->number = new NumberObject('3');
        $actual = $this->number->ifDivisibleBy3Or5Or3And5orNot();
        $expected = 'Fizz';
        $this->assertSame($actual, $expected);
    }

    public function testNumber5ReturnsStringBuzz(): void
    {
        $this->number = new NumberObject('5');
        $actual = $this->number->ifDivisibleBy3Or5Or3And5orNot();
        $expected = 'Buzz';
        $this->assertSame($actual, $expected);
    }

    public function testNumber95ReturnsStringBuzz(): void
    {
        $this->number = new NumberObject('95');
        $actual = $this->number->ifDivisibleBy3Or5Or3And5orNot();
        $expected = 'Buzz';
        $this->assertSame($actual, $expected);
    }

    public function testNumber100ReturnsStringBuzz(): void
    {
        $actual = $this->fizzBuzz->returnFizzOrBuzzOrFizzBuzzOrNumber(new NumberObject('95'));
        $expected = 'Buzz';
        $this->assertSame($actual, $expected);
    }

    public function testNumber15ReturnsStringBuzz(): void
    {
        $actual = $this->fizzBuzz->returnFizzOrBuzzOrFizzBuzzOrNumber(new NumberObject('15'));
        $expected = 'FizzBuzz';
        $this->assertSame($actual, $expected);
    }
}
