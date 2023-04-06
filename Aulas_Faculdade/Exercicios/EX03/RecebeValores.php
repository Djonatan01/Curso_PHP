<?php
    require('FuncaoSalario.php');
    
    $nomeFuncionario = $_POST['txtNomeFuncionario'];
    $valorDia = $_POST['txtDiaTrabalhado'];
    $numeroFaltas = $_POST['txtNumeroFaltas'];

    $x = new FuncaoSalario($valorDia , $numeroFaltas);
    echo "Demostrativo de pagamento do funcionário: {$nomeFuncionario}<br>
    Salário base.......................... R$ {$x-> salarioBase()}<br>
    Salário bruto......................... R$ {$x-> salarioBruto()}<br>
    INSS.................................... R$ {$x-> inss()}<br>
    Salário liquido....................... R$  {$x-> salarioLiquido()}";

?>