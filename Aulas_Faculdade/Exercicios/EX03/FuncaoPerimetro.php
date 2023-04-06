<?php
/**
 * Calculo de salario
 * Recebe os dados e calcula 
 * @author Diego Jonatan
 */

 class calcularPerimetro{
    public $calculoPerimetro, $altura, $base ,$baseMaior,$lado;
    
    function __construct($base,$altura,$baseMaior,$lado)
    {
        $this-> base = $base;
        $this-> altura = $altura;
        $this-> baseMaior=$baseMaior;
        $this-> lado =$lado;
    }

    public function Quadrado()
    {
        return $calculoPerimetro = $this-> altura * 4;
    }
    public function retangulo()
    {
        return  $calculoPerimetro = 2 * ($this-> altura + $this-> base);
    }
    public function paralelogramo()
    {
        return  $calculoPerimetro = 2 * ($this-> lado + $this-> base);
    }
    public function trapezio()
    {
        return $calculoPerimetro = $this-> altura + $this->base + $this-> lado + $this-> baseMaior;
    }
 }
?>