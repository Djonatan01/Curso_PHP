<?php
// leitura do arquivo json

echo "Abrindo o arquivo JSON.....<br>";

$j = file_get_contents("registros.json");
$dados = json_decode($j,true); // use true 

echo "Nome: ".$dados['nome']."<br>";
echo "E-mail: ".$dados['email']."<br>";
echo "Idade: ".$dados['idade']."<br>";
?>