<?php

function randomRange($start, $end) {
   $range = range($start, $end);
   shuffle($range);
   return $range;
}
echo implode(', ', randomRange(11, 20));
