<?php

//0

function sum1($n, $x) {
    $factorial = 1;
    $sum = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
        $sum += $factorial / $x ** $i;
    }
    return $sum;
}

echo sum1(3, 2) . "\n";
echo sum1(4, 3) . "\n";
echo sum1(5, -4) . "\n";

echo "\n";

//1

function factorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    } 
    return $factorial;
}

function sum2($n, $x) {
    $sum = 1;
    for ($i = 1; $i <= $n; $i++) {
        $sum += factorial($i) / $x ** $i;
    }
    return $sum;
}

echo sum2(3, 2) . "\n";
echo sum2(4, 3) . "\n";
echo sum2(5, -4) . "\n";
