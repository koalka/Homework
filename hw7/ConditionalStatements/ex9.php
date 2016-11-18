<?php

function zero19($abc) {
    switch ($abc) {
        case 0:
            return 'zero';
        case 1:
            return 'one';
        case 2:
            return 'two';
        case 3:
            return 'three';
        case 4:
            return 'four';
        case 5:
            return 'five';
        case 6:
            return 'six';
        case 7:
            return 'seven';
        case 8:
            return 'eight';
        case 9:
            return 'nine';
        case 10:
            return 'ten';
        case 11:
            return 'eleven';
        case 12:
            return 'twelve';
        case 13:
            return 'thirteen';
        case 14:
            return 'fourteen';
        case 15:
            return 'fifteen';
        case 16:
            return 'sixteen';
        case 17:
            return 'seventeen';
        case 18:
            return 'eighteen';
        case 19:
            return 'nineteen';
    }
}

function tens($abc) {
    switch ($abc) {
        case 2:
            return 'twenty';
        case 3:
            return 'thirty';
        case 4:
            return 'fourty';
        case 5:
            return 'fifty';
        case 6:
            return 'sixty';
        case 7:
            return 'seventy';
        case 8:
            return 'eighty';
        case 9:
            return 'ninety';
    }
}

function hundreds($abc) {
    switch ($abc) {
        case 1:
            return 'one hundred';
        case 2:
            return 'two hundred';
        case 3:
            return 'three hundred';
        case 4:
            return 'four hundred';
        case 5:
            return 'five hundred';
        case 6:
            return 'six hundred';
        case 7:
            return 'seven hundred';
        case 8:
            return 'eight hundred';
        case 9:
            return 'nine hundred';
    }
}

function zero99($abc) {
    if ($abc >= 0 && $abc <= 19) {
        return zero19($abc);
    }
    $c = $abc % 10;
    $b = floor($abc / 10);
    return $c != 0 ? tens($b) . ' ' . zero19($c) : tens($b);
}

function nmbr($abc) {
    if ($abc <= 99) {
        return zero99($abc);
    }
    if ($abc <= 999) {
        $c = $abc % 10;
        $b = (floor($abc / 10) % 10);
        $a = floor($abc / 100);
        if ($b == 0 && $c == 0) {
            return hundreds($a);
        }
        $bc = 10 * $b + $c;
            return hundreds($a) . ' and ' . zero99($bc);
    }
}

echo nmbr(0) . "\n";
echo nmbr(9) . "\n";
echo nmbr(25) . "\n";
echo nmbr(98) . "\n";
echo nmbr(400) . "\n";
echo nmbr(617) . "\n";
echo nmbr(999) . "\n";