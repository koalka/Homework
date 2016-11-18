<?php

function srt($a, $b, $c) {
    if ($a >= $b && $a >= $c) {
        if ($b >= $c) {
            return $a . $b . $c;
        } else {
            return $a . $c . $b;
        }
    } else if ($b >= $a && $b >= $c) {
        if ($a >= $c) {
            return $b . $a . $c;
        } else {
            return $b . $c . $a;
        }
    } else if ($c >= $a && $c >= $b) {
        if ($a >= $b) {
            return $c . $a . $b;
        } else {
            return $c . $b . $a;
        }
    }
}

echo srt(5, 1, 2) . "\n";
echo srt(-2, -2, 1) . "\n";
echo srt(-2, 4, 3) . "\n";
