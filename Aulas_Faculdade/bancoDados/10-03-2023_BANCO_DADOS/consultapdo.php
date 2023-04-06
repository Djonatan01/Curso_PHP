<?php
    session_start();
    if(isset($_SESSION['usuario'])){
    try{
        $conecta=new PDO("mysql:host=127.0.0.1;port=3306;dbname=empresa","root","");
        $conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $texto="SELECT * FROM funcionarios";
        $dados=$conecta->query($texto);
        foreach($dados as $linha){
            echo "Nome = {$linha['nome']}  Cidade = {$linha['cidade']}<br>";

        }
        
    }
    catch(PDOException $erro){
        echo "Não consigo acessar o Banco...";
    }
    }
    else
    {
        echo "<h1>Você não está logado...</h1>";
    }

?>