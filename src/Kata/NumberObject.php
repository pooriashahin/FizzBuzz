<?php

namespace Kata;

class NumberObject
{   
    private int $value;
    
    Const FIZZ = 'Fizz';
    Const BUZZ = 'Buzz';

    public function __construct(int $number)
    {
        $this->value = $number;
    }

    public function ifDivisibleBy3Or5Or3And5OrNot()
    {
        if ($this->value % 3 === 0 && $this->value % 5 === 0) 
        {
            return self::FIZZ . self::BUZZ;
        }
        
        if ($this->value % 3 === 0)
        {
            return self::FIZZ;
        }

        if ($this->value % 5 === 0)
        {
            return self::BUZZ;
        }

        return $this->value;
    }



    
}


