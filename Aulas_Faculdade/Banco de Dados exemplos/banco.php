<?php
    $no="Waldisney da Silva";
    $cid="Cruzeiro";
    $sal=3000;

    try{
        $conecta=new PDO("mysql:host=127.0.0.1;port=3306;dbname=empresa","root","");
        $conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $texto="INSERT INTO funcionarios (nome,cidade,salario) VALUE ('".$no."','".$cid."','".$sal."')";
        $conecta->exec($texto);
        echo "<h1>Dados gravados com sucesso...</h1>";
    }
    catch(PDOException $erro){
        echo "Não consigo acessar o Banco...";
    }
?>