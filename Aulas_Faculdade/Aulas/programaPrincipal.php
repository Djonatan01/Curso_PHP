<?php
        require ("classe1.php");
        $x = new Dados();
        echo "Nome = {$x->nome}<br>";
        
        $x->SomaSalario(200);
        
        echo"Valor Atualizado R$ = {$x->salario}<br>" ;
           
