<html>
<head><title>Cadastro de Funcionários</title></head>
<body>
	<form method="POST" action='#'>
		Nome: <input type="text" name="caixa1"><br>
		CPF: <input type="text" name="caixa2"><br>
		<input type="submit" value="Enviar Dados" name="bt1">
		<input type="reset" value="cancelar">
	</form>
	
</body>
</html>
<?php
    if(isset($_POST['bt1'])){
        $no=$_POST['caixa1'];
        $cpf=$_POST['caixa2'];

        echo "Nome = {$no}<br>";
        echo "CPF = {$cpf}<br>";
    }
?>