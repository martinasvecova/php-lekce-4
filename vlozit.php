<?php

$handle = fopen('prispevky.txt', 'a');
fwrite($handle, "<strong>" . $_POST['jmeno'] . "</strong> <br>\n");
fwrite($handle, $_POST['vzkaz'] . "<br>\n" . "<hr>");

if ($handle === false || empty($_POST['jmeno']) && empty($_POST['vzkaz'])) {
    echo "Chyba! <a href=\"navstevni-kniha.php\">Vrátit se zpět na návštevní knihu.</a>";
} else {
    echo "Vzkaz byl uložen. ";
    echo "<a href=\"navstevni-kniha.php\">Vrátit se zpět na návštevní knihu.</a>";
}



