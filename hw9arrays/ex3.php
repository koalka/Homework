<?php

function addElement(array $array, $index, $element ) {
    if (count($array) < $index) {
        $index = count($array);
    }
    $array[$index] = $element;
    return $array;
}
print_r(addElement([ 1, 2, 3, 3, 3], 3, 5));