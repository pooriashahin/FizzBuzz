<?php

namespace Kata;

class NumberObject
{
    /*private int $value;

    public function __construct(int $number) 
    {
        $this->value = $number;
    }*/

    Const FIZZ = 'Fizz';
    Const BUZZ = 'Buzz';

    public function toString(int $number): string 
    {
        if ($this->isDivisibleBy3And5($number))
        {
            return self::FIZZ . self::BUZZ;
        }

        if ($this->isDivisibleBy3($number))
        {
            return self::FIZZ;
        }

        if ($this->isDivisibleBy5($number))
        {
            return self::BUZZ;
        }

        return (string) $number;
    }

    private function isDivisibleBy3And5($number): bool
    {
        return $this->isDivisibleBy3($number) && $this->isDivisibleBy5($number);
    }

    private function isDivisibleBy3($number): bool
    {
        return $number %3 === 0;
    }

    private function isDivisibleBy5($number): bool
    {
        return $number %5 === 0;
    }

}
