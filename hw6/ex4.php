<?php

function quad($a, $b, $c) {
//ax2+bx+c=0
    $D = $b * $b - 4 * $a * $c;
    if ($D >= 0) {
        $x1 = (-$b + sqrt($D)) / 2 * $a;
        $x2 = (-$b - sqrt($D)) / 2 * $a;
        if ($D == 0) {
            return array($x1);
        } else {
            return array($x1, $x2);
        }
    } else {
        return array();
    }
}

function prnt($result) {
    $l = count($result);
    if ($l == 0) {
        echo 'There are no real roots';
    } else if ($l == 1) {
        echo 'x1=x2 = ' . $result[0];
    } else {
        echo 'x1 = ' . $result[0];
        echo ', ';
        echo 'x2 = ' . $result[1];
    }
    echo "\n";
}

function eq($a, $b, $c) {
    $eq = '';
          $eq .= $a . 'x^2 ';
        if ($b > 0) {
        $eq .= '+ ' . $b . 'x ';
    } else if ($b < 0) {
        $eq .= $b . 'x ';
    }
    if ($c > 0) {
        $eq .= '+ ' . $c;
    } else if ($c < 0) {
        $eq .= $c;
    }
    return $eq . ' = 0  ';
}

function quadeq($a, $b, $c) {
    echo eq($a, $b, $c);
    prnt(quad($a, $b, $c));
}

quadeq(6, -4, 1);
quadeq(3, 4, -10);
quadeq(8, -10, 4);
quadeq(-7, -8, 14);
