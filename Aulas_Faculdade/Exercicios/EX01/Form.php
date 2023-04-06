<?php
	require("JurosSobreJuros.php");

	$noCli=$_POST['txtNomeCliente'];
	$modeloCarro=$_POST['txtModeloCarro'];
	$valorFinanciamento=$_POST['txtValorFinanciamento'];
	$numParcelas=$_POST['txtNumParcelas'];
	$txJuros=$_POST['txtJuros'];

	$x = new CalculoJuros();

	$x->Juros($txJuros,$numParcelas,$valorFinanciamento);
	$valorParcels = $x ->totalFinanciamento / $numParcelas;
	echo "Nome do Cliente = {$noCli}<br>";
	echo "Modelo do carro financiado = {$modeloCarro}<br>";
	echo "Valor do carro = R$ {$valorFinanciamento}<br>";
	echo "Valor de cada parcela = R$" .number_format($valorParcels, 2, ',', '.')."<br>";
	echo "Total do financiamento = R$" .number_format($x ->totalFinanciamento,2,',','.')."<br>";
?>
