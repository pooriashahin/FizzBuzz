<?php

namespace Kata;

class Index
{
    public function handle(): bool
    {
        return true;
    }
    
    public function printOneToHundred(){

        for($number=1; $number<=100; $number++){

            if($number%15 === 0){
                echo "FIZZBUZZ <br>";
                continue;
            }
            if($number%3 === 0){
                echo "FIZZ <br>";
                continue;
            }
            if($number%5 === 0){
                echo "BUZZ <br>";
                continue;
            }
            echo "$number<br>";
        }
    
    }
 
}

$numbers = new Index();
$numbers->printOneToHundred();


