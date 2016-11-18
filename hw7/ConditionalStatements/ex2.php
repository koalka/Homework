<?php

function result($score) {
    if ($score >= 0 && $score <= 3) {
        echo $score * 10;
    } else if ($score >= 4 && $score <= 6) {
        echo $score * 15;
    } else if ($score >= 7 && $score <= 9) {
        echo $score * 20;
    } else if ($score >= 10) {
        echo $score * 100;
    } else {
        echo 'Invalid score';
    }
    echo "\n";
}

result(2);
result(4);
result(9);
result(-1);
