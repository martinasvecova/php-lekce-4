<?php

function maximum($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        echo 'Chyba!';
    } elseif ($a > $b) {
        echo $a;
    } else {
        echo $b;
    }
}

maximum(340, 560);
echo '<br>';
maximum(7.1, 7.2);
echo '<br>';
maximum(23, 23);
echo '<br>';
maximum(253, 'x');