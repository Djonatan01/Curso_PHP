<?php
    session_start();

    $user=$_POST['caixausuario'];
    $pass=$_POST['caixasenha'];

    try{
        $conecta=new PDO("mysql:host=127.0.0.1;port=3306;dbname=empresa","root","");
        $conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $texto="SELECT * FROM usuarios WHERE usuario='$user' AND senha='$pass'";
        $dados=$conecta->query($texto);
        $linha=$dados->fetch(PDO::FETCH_ASSOC);
        if($linha>0){
            echo "Você está logado...<br>";
            $_SESSION['usuario']=$user;
        }
        else
        {
            echo "Usuario ou senha inválida, tente novamente...";
        }
    }
    catch(PDOException $erro){
        echo "Não consigo acessar o Banco...";
    }

?>