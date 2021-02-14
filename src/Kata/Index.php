<?php

namespace Kata;

class Fizzbuzz
{
    public function handle(): bool
    {
        return true;
    }

    public function printNumber($a){

        if ($a%3 !== 0 && $a%5 !== 0){
            return $a;
        }    
    }
    
    public function replaceFactorOfThree($a){

        if ($a %3 === 0){
            return "FIZZ";
        }
    }

    public function replaceFactorOfFive($a){

        if ($a %5 === 0){
            return "BUZZ";
        }
    }
}