<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cálculo do preço do peso cúbico:</title>
    </head>
    <body>
        
        <form method="POST" action="#">
            Altura da objeto:       <input type="text" name="caixa1"><br>
            Largura do objeto:      <input type="text" name="caixa2"><br>
            Comprimento do objeto:  <input type="text" name="caixa3"><br>
            Peso do objeto:         <input type="text" name="caixa4"><br>
            <input type="submit" valiue="Calcular peso cúbico" name="bt1">
            <input type="reset" value="Limpar" name="bt2">
        </form>
        
        <?php
            if(isset($_POST['bt1'])){
                $altura=$_POST['caixa1'];
                $largura=$_POST['caixa2'];
                $comprimento=$_POST['caixa3'];
                $peso=$_POST['caixa4'];
                
                $pesoCubico = ($comprimento * $largura * $altura) /6000;
                
                echo '<br>';
                if ($pesoCubico < 5000){
                    echo "O peso a ser considerado é peso do objeto: {$peso}KG";
                } else{
                    echo "O peso a ser considerado é peso cúbico: {$pesoCubico}KG";
                }
            }
        ?>
    </body>
</html>
