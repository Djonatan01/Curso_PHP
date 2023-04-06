<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo cookies</title>
    </head>
    <body>
        <?php
        // put your code here
            setcookie('bolacha',"Diego", time() + 172800,"/");
            //echo $_COOKIE['bolacha'];
        ?>
    </body>
</html>
