<?php
//Chamar as configurações do autoload do composer
//require 'vendor/autoload.php';

//echo Sistema\Nucleo\Helpers::saudacao();

require 'rotas.php';
//Chamar class com nameSpace
//podemos também dar apelido nas class e chamar elas pelo apelido
/*
use Sistema\Nucleo\Mensagem as msg;
use Sistema\Nucleo\Helpers;
use Sistema\Nucleo\Controlador;

$controlador = new Controlador('admin');
echo'<hr>';
var_dump($controlador);
*/
/*
//Os códigos abaixo são duas formas diferente de retonar das direto da class 
$msg = new msg;
echo (new msg) -> alerta('texto de alerta'); //Método magico __tostring

echo $msg ->sucesso('Mensagem de sucesso')->renderizar();//Método manual pelo renderizar
var_dump($msg);

echo'<hr>';
echo 'Verificar com o Charles o como realizar converção do UTF-8 no PHP 8.2 <br>' ;
echo Helpers::slug("Adão negro - 2022");
echo'<hr>';
echo Helpers::saudacao().'<br> hoje é '.Helpers::dataAtual();

echo'<hr>';
echo 'Verificar com o Charles o motivo de não retornar o SERVER_NAME na função servidor Sistema' ;
*/