<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 2 - PHP - Financiamento 03-03-2023</title>
    </head>
    <body>
        <form method="POST" action="Form.php">
            <div class="row g-3 align-items-center">
                <div class="col-auto"><label class="col-form-label">Nome:</label></div>
                <div class="col-auto"><input type="text" name="txtNomeCliente"></div>
                <div class="col-auto"><label class="col-form-label">Modelo do carro:</label></div>
                <div class="col-auto"><input type="text" name="txtModeloCarro"></div>
                <div class="col-auto"><label class="col-form-label">Valor do carro:</label></div>
                <div class="col-auto"><input type="text" name="txtValorFinanciamento"></div>
                <div class="col-auto"><label class="col-form-label">Quantidade de percelas:</label></div>
                <div class="col-auto"><input type="text" name="txtNumParcelas"></div>
                <div class="col-auto"><label class="col-form-label">Taxa de juros:</label></div>
                <div class="col-auto"><input type="text" name="txtJuros"></div>
            </div>
            <input type="submit" value="Enviar dados" name="bt1">
            <input type="reset" value="Cancelar">
        </form>
    </body>
</html>