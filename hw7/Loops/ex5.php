<?php

function matrix($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            echo $i + $j - 1 . ' ';
        }
        echo "\n";
    }
}

matrix(4);
