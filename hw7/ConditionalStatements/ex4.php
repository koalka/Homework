<?php

function result($a, $b, $c) {
    echo substr_count($a . $b . $c, '-') % 2 ? '-' : '+';
    echo "\n";
}

result(5, 2, 2);
result(-2, -2, 1);
result(-2, 4, 3);
