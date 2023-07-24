<?php


namespace SistemaOrcamento\DesignPattern\Impostos;


use SistemaOrcamento\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento) : float;
}