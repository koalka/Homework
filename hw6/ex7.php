<?php
date_default_timezone_set('Europe/Sofia');
echo 'Current PHP version: ' . phpversion() . "\n";
$filename = 'ex7.php';
if (file_exists($filename)) {
    echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
}