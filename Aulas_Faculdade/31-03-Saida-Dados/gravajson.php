<?php
//JSON_ENCODE cria o arquivo json
//JSON_DECODE le o arquivo json
//FILE_PUT_CONTENT() faz a gravação do arquivo
//FILE_GET_CONTENT() faz a leitura do arquivo

    $registro = array(
        "nome"=>$_POST['nome'],
        "email"=>$_POST['email'],
        "idade"=>$_POST['idade']
    );

    //JSON_ENCODE cria o arquivo json
    $j=json_encode($registro);

    //FILE_PUT_CONTENT() faz a gravação do arquivo
    file_put_contents("registros.json",$j);

    echo"Arquivo criado com sucesso...<br>";
?>
