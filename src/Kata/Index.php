<?php

namespace Kata;

class Index
{
    public function handle($number): bool
    {
        return true;
    }
    
    public function replaceFactorOfThree($number){

        if ($number%3 === 0){

            return $number = "FIZZ";
        }
    }

    public function replaceFactorOfFive($number){

        if ($number%5 === 0){

            return $number = "BUZZ";
        }
    }

    
    public function replaceFactorOfThreeAndFive($number){

        if ($number%3 === 0 && $number%5 === 0){

            return $number = "FIZZBUZZ";
        }
    }
    
}

for($number=1; $number<=100; $number++){
    
    echo "$number<br>";
    }

   $numbers = new index();


