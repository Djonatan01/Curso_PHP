<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 03 cálculos das formas</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    
        <form method="POST" action="#">
                <div class="col-auto"><label class="col-form-label">Informe lado1 do trapézio:</label></div>
                <div class="col-auto"><input type="text" name="lado1"></div>
                <div class="col-auto"><label class="col-form-label">Informe lado2 do trapézio:</label></div>
                <div class="col-auto"><input type="text" name="lado2"></div>
                <div class="col-auto"><label class="col-form-label">Informe a bese menor do trapézio:</label></div>
                <div class="col-auto"><input type="text" name="baseptrapMenor"></div>
                <div class="col-auto"><label class="col-form-label">Informe a bese maior do trapézio:</label></div>
                <div class="col-auto"><input type="text" name="baseptrapMaior"></div>
            <input type="submit" value="Calcular trapézio" name="bt1">
            <input type="reset" value="Cancelar">
        </form>
    </body>
</html>

<?php
    require('FuncaoPerimetro.php');

    if(isset($_POST['bt1'])){
        $lado1=$_POST['lado1'];
        $baseMaior=$_POST['baseptrapMaior'];
        $base=$_POST['baseptrapMenor'];
        $lado2=$_POST['lado2'];

        $x = new calcularPerimetro($base,$lado1,$baseMaior,$lado2);

        echo "<br><br> A figura selecionada trapézio<br>
        Perimetro é :.......................... R$ {$x-> trapezio()}<br>";
    }
?>