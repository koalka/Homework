<?php

function check($char) {
    $str = explode(' ', '2 3 4 5 6 7 8 9 10 J Q K A');
    if (in_array($char, $str) !== false) {
        echo 'yes';
    } else {
        echo 'no';
    }
    echo "\n";
}

check('5');
check('1');
check('Q');
check('q');
