<?php

namespace Kata;
include "index.php";

$i = new Fizzbuzz();

for($number=1; $number<=100; $number++){

    $i->printNumber($number);
    $i->replaceFactorOfThree($number);
    $i->replaceFactorOfFive($number);
    $i->replaceFactorOfThreeAndFive($number);
    
    }