<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 03 cálculos das formas</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST" action="#">
            <div class="row g-3 align-items-center">
                <div class="col-auto"><label class="col-form-label">Informe um dos lados do quadrado:</label></div>
                <div class="col-auto"><input type="text" name="alturaquadrado"></div>
            </div>
            <input type="submit" value="Calcular quadrado" name="bt1">
            <input type="reset" value="Cancelar">
        </form>
    </body>
</html>

<?php
    require('FuncaoPerimetro.php');

    if(isset($_POST['bt1'])){
        $altura=$_POST['alturaquadrado'];

        $x = new calcularPerimetro($base,$altura,$baseMaior,$lado);

        echo "<br><br> A figura selecionada quadrado<br>
        Perimetro é :.......................... R$ {$x-> Quadrado()}<br>";
    }
?>