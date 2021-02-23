<?php

namespace Kata;

class NumberObject
{   
    private int $result;
    
    Const FIZZ = 'Fizz';
    Const BUZZ = 'Buzz';

    public function __construct(int $number)
    {
        $this->result = $number;
    }

    public function toString(): string 
    {
        if ($this->isDivisibleBy3And5())
        {
            return self::FIZZ . self::BUZZ;
        }

        if ($this->isDivisibleBy3())
        {
            return self::FIZZ;
        }

        if ($this->isDivisibleBy5())
        {
            return self::BUZZ;
        }

            return (string) $this->result;
    }

    private function isDivisibleBy3And5(): bool
    {
        return  $this->isDivisibleBy3() && 
                $this->isDivisibleBy5();
    }

    private function isDivisibleBy3(): bool
    {
        return $this->result %3 === 0;
    }

    private function isDivisibleBy5(): bool
    {
        return $this->result %5 === 0;
    }

}


