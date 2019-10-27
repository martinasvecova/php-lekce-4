<?php

$handle = fopen('soubor.txt', 'a');

if ($handle === false) {
    echo 'Soubor neexistuje';
} else {
    fwrite($handle, "Na nový riadok. <br>\n");
    fclose($handle);
}

$handle = fopen('soubor.txt', 'r');

if ($handle === false) {
    echo 'Soubor neexistuje';
} else {
    $text = fread($handle, 1000);
    echo $text;
    fclose($handle);
}


