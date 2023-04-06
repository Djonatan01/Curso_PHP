<?php

/**
 * Description of newPHPClass
 *
 * @author aluno
 */
class Dados {
    //put your code here
    // atributos
    
    public $nome;
    public $salario;
    
    //Métodos
    function __construct() 
    {
        $this ->nome = "Judson";
        $this->salario=1500.00;
    }
    public function SomaSalario($valor)
    {
        $this->salario = $this->salario + $valor;
    }
}
