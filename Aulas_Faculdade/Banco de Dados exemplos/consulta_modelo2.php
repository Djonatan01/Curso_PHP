<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> Teste de classe PDO </title>
<body>
<h1>Listagem Geral de Funcionários</h1>
<?php
   include('pdo-class.php');
   $conecta=Database::conexao();
   $dados=$conecta->query('SELECT * FROM funcionarios');
   foreach ($dados as $linha){
      echo "<h2>".$linha['cpf']." - ".$linha['nome']." - ".$linha['salario']."<br></h2>";
   }
?>  
</html>