<?php

namespace Kata;
include "index.php";

$i = new Fizzbuzz();

    for($number=1; $number<=100; $number++){

    echo $i->printNumber($number);
    echo $i->replaceFactorOfThree($number);
    echo $i->replaceFactorOfFive($number);
    echo "<br>";
    
    }