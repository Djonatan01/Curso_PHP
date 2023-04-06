<?php
/**
 * Calculo de salario
 * Recebe os dados do Form e calcula o salrio
 * @author Diego Jonatan
 */
class FuncaoSalario{
    public $valorDia , $diasFaltas , $totalLiquido , $totalBase;
    public $adiantamento;
    public $valInss;
    public $totalBruto;

    function __construct($valorDia,$nFaltas)
    {
        $this->diasFaltas = $nFaltas;
        $this->valorDia = $valorDia;
        $this -> totalBase = $this -> totalLiquido = 0;
    }
    public function inss()
    {
        if ($this-> totalBruto >  832.67){
            $descontoInss = $this-> totalBruto * 0.15;
        }elseif ($this-> totalBruto >  416.34 and $this-> totalBruto < 832.68){
            $descontoInss = $this-> totalBruto * 0.11;

        }elseif ($this-> totalBruto > 249.81 and $this-> totalBruto < 416.34){
            $descontoInss = $this-> totalBruto * 0.09;
        }else{
            $descontoInss = $this-> totalBruto * 0.08;
        }
        return $descontoInss;
    }
    public function adiantamento()
    {
        return  $this-> totalBase * 0.4;
    }
    public function salarioBruto () {
        return $this-> totalBruto = $this-> totalBase -($this-> valorDia * $this-> diasFaltas) ;
    }
    public function salarioBase(){
        return $this-> totalBase = $this-> valorDia * 30;
    }
    public function salarioLiquido (){
        return $liquido = $this->salarioBruto() - $this-> inss()  - $this-> adiantamento();
    }
}
?>