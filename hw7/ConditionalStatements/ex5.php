<?php

function biggest($a, $b, $c) {
    echo ($a > $b ? ($a > $c ? $a : $c) : ($b > $c ? $b : $c)) . "\n";
}

biggest(5, 2, 2);
biggest(-2, -2, 1);
biggest(-2, 4, 3);
biggest(0, -2.5, 5);

/*
echo max(5, 2, 2);
echo max(-2, -2, 1);
echo max(-2, 4, 3);
echo max(0, -2.5, 5);
*/