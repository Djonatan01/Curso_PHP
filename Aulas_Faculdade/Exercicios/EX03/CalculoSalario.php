<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício - PHP - Folha de pagamento 17-03-2023</title>
    </head>
    <body>
        <form method="POST" action="RecebeValores.php">
            <div class="row g-3 align-items-center">
                <div class="col-auto"><label class="col-form-label">Nome do funcionário:</label></div>
                <div class="col-auto"><input type="text" name="txtNomeFuncionario"></div>
                <div class="col-auto"><label class="col-form-label">Valor do dia trabalhado:</label></div>
                <div class="col-auto"><input type="text" name="txtDiaTrabalhado"></div>
                <div class="col-auto"><label class="col-form-label">Número de faltas:</label></div>
                <div class="col-auto"><input type="text" name="txtNumeroFaltas"></div>
            </div>
            <input type="submit" value="Calcular salário" name="bt1">
            <input type="reset" value="Cancelar">
        </form>
    </body>
</html>