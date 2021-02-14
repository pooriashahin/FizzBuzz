<?php

namespace Kata;
include "index.php";

for($number=1; $number<=100; $number++){

    $i = new Fizzbuzz();
    
    $i->printNumber($number);
    $i->replaceFactorOfThree($number);
    $i->replaceFactorOfFive($number);
    $i->replaceFactorOfThreeAndFive($number);
    
    }


