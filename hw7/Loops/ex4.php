<pre>
<?php

function factorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

//n! / k! (1 < k < n < 100)


function division($n, $k) {
    if (1 < $k && $k < $n && $n < 100) {
        return factorial($n) / factorial($k);
    }
    return 0;
}

echo division(5, 2) . "\n";
echo division(6, 5) . "\n";
echo division(8, 3) . "\n";

?>
</pre>