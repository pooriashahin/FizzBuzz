<?php

namespace Kata;


class FizzBuzz
{
    public function returnFizzOrBuzzOrFizzBuzzOrNumber(NumberObject $number): string
    {
        return $number->ifDivisibleBy3Or5Or3And5orNot();
    }
}

