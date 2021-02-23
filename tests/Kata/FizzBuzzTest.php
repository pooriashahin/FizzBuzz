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
        $expected= '1';
        $actual = $this->fizzBuzz->handle(new NumberObject(1));
        $this->assertSame($actual, $expected);
    }
      
    public function testNumber2returnstring2(): void
    {
        $expected= '2';
        $actual = $this->fizzBuzz->handle(new NumberObject(2));
        $this->assertSame($actual, $expected);
    }

    public function testNumber4returnstring4(): void
    {
        $expected= '4';
        $actual = $this->fizzBuzz->handle(new NumberObject(4));
        $this->assertSame($actual, $expected);
    }

    public function testNumber98returnstring98(): void
    {
        $expected= '98';
        $actual = $this->fizzBuzz->handle(new NumberObject(98));
        $this->assertSame($actual, $expected);
    }

    public function testNumber3returnstringFizz(): void
    {
        $expected= 'Fizz';
        $actual = $this->fizzBuzz->handle(new NumberObject(3));
        $this->assertSame($actual, $expected);
    }

    public function testNumber6returnstringFizz(): void
    {
        $expected= 'Fizz';
        $actual = $this->fizzBuzz->handle(new NumberObject(6));
        $this->assertSame($actual, $expected);
    }

    public function testNumber9returnstringFizz(): void
    {
        $expected= 'Fizz';
        $actual = $this->fizzBuzz->handle(new NumberObject(9));
        $this->assertSame($actual, $expected);
    }

    public function testNumber99returnstringFizz(): void
    {
        $expected= 'Fizz';
        $actual = $this->fizzBuzz->handle(new NumberObject(99));
        $this->assertSame($actual, $expected);
    }

    public function testNumber5returnstringBuzz(): void
    {
        $expected= 'Buzz';
        $actual = $this->fizzBuzz->handle(new NumberObject(5));
        $this->assertSame($actual, $expected);
    }

    public function testNumber10returnstringBuzz(): void
    {
        $expected= 'Buzz';
        $actual = $this->fizzBuzz->handle(new NumberObject(10));
        $this->assertSame($actual, $expected);
    }

    public function testNumber100returnstringBuzz(): void
    {
        $expected= 'Buzz';
        $actual = $this->fizzBuzz->handle(new NumberObject(100));
        $this->assertSame($actual, $expected);
    }

    public function testNumber15returnstringFizzBuzz(): void
    {
        $expected= 'FizzBuzz';
        $actual = $this->fizzBuzz->handle(new NumberObject(15));
        $this->assertSame($actual, $expected);
    }

    public function testNumber30returnstringFizzBuzz(): void
    {
        $expected= 'FizzBuzz';
        $actual = $this->fizzBuzz->handle(new NumberObject(30));
        $this->assertSame($actual, $expected);
    }
    
}
