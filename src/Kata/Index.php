<?php

namespace Kata;

class Fizzbuzz
{
    public function handle(): bool
    {
        return true;
    }

    public function printNumber($number){

        if ($number%3 !== 0 && $number%5 !== 0){
            return $number;
        }    
    }
    
    public function replaceFactorOfThree($number){

        if ($number %3 === 0){
            return "FIZZ";
        }
    }

    public function replaceFactorOfFive($number){

        if ($number %5 === 0){
            return "BUZZ";
        }
    }
}