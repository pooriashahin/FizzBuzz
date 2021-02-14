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

        echo "$a<br>";
        }    
    }
    
    public function replaceFactorOfThree($a){

        if ($a %3 === 0 && $a%5 !== 0){

            echo "FIZZ<br>";
        }
    }

    public function replaceFactorOfFive($a){

        if ($a %5 === 0 && $a%3 !== 0){

            echo "BUZZ<br>";
        }
    }

    
    public function replaceFactorOfThreeAndFive($a){

        if ($a%3 === 0 && $a%5 === 0){

            echo "FIZZBUZZ<br>";
        }
    }
    
}