<?php


namespace SistemaOrcamento\DesignPattern;


use SistemaOrcamento\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto) : float
    {
        return $imposto->calculaImposto($orcamento);
    }
}