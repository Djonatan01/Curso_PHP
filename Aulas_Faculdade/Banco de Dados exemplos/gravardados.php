<?php
    // acesso a banco de dados
    $no="Jonelson da Silva";
    $cid="Lorena";
    $sal=2000;

    try{
        $conecta=new PDO("mysql:host=127.0.0.1;port=3306;dbname=empresa","root","");
        $conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $texto="INSERT INTO funcionarios (nome,cidade,salario) VALUE ('".$no."','".$cid."','".$sal."')";
        $conecta->exec($texto);
        echo "<h1>Dados Gravados com Sucesso...</h1>";
    }
    catch(PDOException $erro){
        echo "Não consegui conectar com o Banco...";
    }
?>