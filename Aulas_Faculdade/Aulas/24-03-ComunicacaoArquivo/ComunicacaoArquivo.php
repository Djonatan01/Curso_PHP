<?php

    $file=fopen("dados.txt","w");

    fwrite($file,"Teste de Gravação de dados\n");
    fwrite($file,"Teste de Gravação de dados\n");
    fwrite($file,"Teste de Gravação de dados\n");

    echo "Arquivo gravado com sucesso...<br>";

    fclose($file);
?>

