<?php

echo 'Historie přístupů:<br>';

$handle = fopen('pristupy.txt', 'r');

if ($handle === false) {
    echo 'Soubor neexistuje';
} else {
    $text = fread($handle, 1000);
    echo $text;
    fclose($handle);

$handle = fopen('pristupy.txt', 'a');


if ($handle === false) {
    echo 'Soubor neexistuje';
} else {
    fwrite($handle, date ('Y-m-d H:i:s.')."<br>\n");
    fclose($handle);
}


}
