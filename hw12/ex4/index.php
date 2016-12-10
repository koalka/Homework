<?php

require_once './Phone.php';
require_once './Tablet.php';

$phone1 = new Phone('Xperia XZ', 'Sony', '', new Battery(false, 'Li-Ion', 2900), new Screen('IPS LCD', 5.2, '1080 x 1920', true));
$phone2 = new Phone('Galaxy S7 Edge', 'Samsung', '', new Battery(false, 'Li-Ion', 3600), new Screen('Super AMOLED', 5.5, '1440 x 2560', true));
$phone3 = new Phone('iPhone 7 Plus', 'Apple', '', new Battery(false, 'Li-Ion', 2900), new Screen('IPS LCD', 5.5, '1080 x 1920', true));
$tablet = new Tablet('ZenPad Z10', 'Asus', '', new Battery(false, 'Li-Polymer', 7800), new Screen('IPS LCD', 9.7, '1536 x 2048', true));

echo str_replace("\n", '<br>', $phone1->getInfo());
echo '<br>';
echo str_replace("\n", '<br>', $phone2->getInfo());
echo '<br>';
echo str_replace("\n", '<br>', $phone3->getInfo());
echo '<br>';
echo str_replace("\n", '<br>', $tablet->getInfo());


