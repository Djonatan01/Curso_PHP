<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 03 cálculos das formas</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST" action="#">
            
                <div class="col-auto"><label class="col-form-label">Informe um lado do paralelogramo:</label></div>
                <div class="col-auto"><input type="text" name="ladoparalelo"></div>
                <div class="col-auto"><label class="col-form-label">Informe a bese do paralelogramo:</label></div>
                <div class="col-auto"><input type="text" name="baseparalelo"></div>
            
            <input type="submit" value="Calcular salário" name="bt1">
            <input type="reset" value="Cancelar">
        </form>
    </body>
</html>

<?php
    require('FuncaoPerimetro.php');

    if(isset($_POST['bt1'])){
        $altura=$_POST[''];
        $baseMaior=$_POST[''];
        $base=$_POST['baseparalelo'];
        $lado=$_POST['ladoparalelo'];

        $x = new calcularPerimetro($base,$altura,$baseMaior,$lado);

        echo "<br><br> A figura selecionada paralelogramo<br>
        Perimetro é :.......................... R$ {$x-> paralelogramo()}<br>";
    }
?>