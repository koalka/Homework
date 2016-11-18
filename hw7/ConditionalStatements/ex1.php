<?php

function compare($a, $b) {
    echo( $a > $b) ? $a . ' ' . $b : $b . ' ' . $a;
    echo "\n";
}

compare(5, 2);
compare(3, 4);
compare(5.5, 4.5);

