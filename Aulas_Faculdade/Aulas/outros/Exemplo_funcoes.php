<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo de Funções</title>
    </head>
    <body>
        <?php
            // put your code here
            $v = array("Ana","Jonelson","Silvia");
            print_r($v,);
            unset($v[0]);
            $v = array_values($v);
            echo '<br>';
            print_r($v);
            ?>
    </body>
</html>
