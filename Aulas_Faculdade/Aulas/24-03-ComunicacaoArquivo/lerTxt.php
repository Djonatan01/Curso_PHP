<?php

    $file=fopen("dados.txt","r");

    while (!feof($file)){
        echo fgets($file). "<br>";
    }
    fclose($file);
?>