<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

    <form method="POST" action="vlozit.php">
        <div class="form-group">
            <label for="formGroupExampleInput">Jméno:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="jmeno">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Vzkaz:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vzkaz"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Přidat vzkaz</button>
    </form>

    <?php

    $handle = fopen('prispevky.txt', 'r');

    if ($handle === false && empty($_POST['jmeno']) && empty($_POST['vzkaz'])) {
        echo 'Žádné příspěvky';
    } else {
        $text = fread($handle, 1000);
        fclose($handle);
    }


    function seradPrispevky($vzkazy, $oddelovac) {
        $vzkazyexploded = explode("<hr>", $vzkazy);
        $vzkazyreversed = array_reverse($vzkazyexploded);
        $vzkazyimploded = implode($vzkazyreversed);
        return $vzkazyimploded;
    }

    $prispevky = seradPrispevky ($text, "<hr>");
    echo $prispevky;

    ?>

</div>
</body>
</html>
