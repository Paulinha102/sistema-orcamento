<?php


namespace SistemaOrcamento\DesignPattern\Impostos;


use SistemaOrcamento\DesignPattern\Orcamento;

class Iss implements calculaImposto
{
    public function calculaImposto(Orcamento $orcamento) : float{
        return $orcamento->valor * 0.06;
    }
}