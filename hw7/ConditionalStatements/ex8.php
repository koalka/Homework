<?php

function digit($digit) {
    if (is_int($digit)) {
        switch ($digit) {
            case 1:
                echo 'one';
                break;
            case 2:
                echo 'two';
                break;
            case 3:
                echo 'three';
                break;
            case 4:
                echo 'four';
                break;
            case 5:
                echo 'five';
                break;
            case 6:
                echo 'six';
                break;
            case 7:
                echo 'seven';
                break;
            case 8:
                echo 'eight';
                break;
            case 9:
                echo 'nine';
                break;
            case 0:
                echo 'zero';
                break;
            default:
                echo 'not a digit';
                break;
        }
    } else {
        echo 'not a digit';
    }
    echo "\n";
}

digit(2);
digit(1);
digit(0);
digit(-0.1);
digit('hi');
digit(10);

