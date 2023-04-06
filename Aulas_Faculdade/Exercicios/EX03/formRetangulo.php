<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 03 cálculos das formas</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST" action="#">  
                <div class="col-auto"><label class="col-form-label">Informe a base:</label></div>
                <div class="col-auto"><input type="text" name="baseret"></div>
                <div class="col-auto"><label class="col-form-label">Informe a altura:</label></div>
                <div class="col-auto"><input type="text" name="alturaret"></div>
            
            <input type="submit" value="Calcular retângulo" name="bt1">
            <input type="reset" value="Cancelar">
        </form>
    </body>
</html>

<?php
    require('FuncaoPerimetro.php');

    if(isset($_POST['bt1'])){
        $altura=$_POST['alturaret'];
        $baseMaior=$_POST[''];
        $base=$_POST['baseret'];
        $lado=$_POST[''];

        $x = new calcularPerimetro($base,$altura,$baseMaior,$lado);

        echo "<br><br> A figura selecionada retângulo<br>
        Perimetro é :.......................... R$ {$x-> retangulo()}<br>";
    }
?>