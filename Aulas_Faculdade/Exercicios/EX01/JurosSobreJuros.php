<?php
/**
 * Description of JurosSobreJuros
 * Recebe os dados fo Form e calcula o total do financiamento
 * @author aluno
 */
 class CalculoJuros {
    //put your code here
    // atributos
	public $totalFinanciamento;

    //Métodos
    function __construct() 
    {
        $this -> totalFinanciamento = 0;
    }
    public function Juros($taxa,$parcelas,$valorCarro)
    {	
        $this ->totalFinanciamento = $valorCarro * pow((1 + ($taxa/100)),$parcelas);
    }
}
?>