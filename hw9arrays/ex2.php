<?php

$x = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function delIndex($index, $x) {
    unset($x[$index]);
    return $x;
}

print_r(delIndex(3, $x));
