<?php

function compare($a, $b) {
    $less = ($a < $b) ? 'true' : 'false';
    $greater = ($a > $b) ? 'true' : 'false';
    $leq = ($a <= $b) ? 'true' : 'false';
    $greq = ($a >= $b) ? 'true' : 'false';
    $eq = ($a == $b) ? 'true' : 'false';
    $diff = ($a != $b) ? 'true' : 'false';
    echo "$a < $b: " . $less . ',  ' . "$a > $b: " . $greater . ',  ' . "$a <= $b: " . $leq . ',  ' . "$a >= $b: " . $greq . ',  ' . "$a = $b: " . $eq . ',  ' . "$a |= $b: " . $diff . "\n";
}

compare(5, -5);
compare(10, 0);
compare(12, 0.2);
compare(4, 20);
compare(9, 9);
compare(0, 0);
