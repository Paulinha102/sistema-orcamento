<?php


namespace SistemaOrcamento\DesignPattern;


use SistemaOrcamento\DesignPattern\Descontos\DescontoMaisDe500Reais;
use SistemaOrcamento\DesignPattern\Descontos\DescontoMaisDe5Itens;
use SistemaOrcamento\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento) : float {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );
        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}