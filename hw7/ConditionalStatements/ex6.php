<?php

function bigger($a, $b, $c) {
    return $a > $b ? ($a > $c ? $a : $c) : ($b > $c ? $b : $c);
}

function biggest($a, $b, $c, $d, $e) {
    return bigger(bigger($a, $b, $c), $d, $e);
}

echo biggest(5, 2, 2, 4, 1) . "\n";
echo biggest(-2, -22, 1, 0, 0) . "\n";
echo biggest(-2, 4, 3, 2, 0) . "\n";
echo biggest(0, -2.5, 0, 5, 5) . "\n";
