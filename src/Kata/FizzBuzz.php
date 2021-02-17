<?php

namespace Kata;


class FizzBuzz
{
    Const FIZZ = 'Fizz';
    Const BUZZ = 'Buzz';

    public function handle(NumberObject $number): string
    {

        return $number->toString();
    }
}

