<?php


use SistemaOrcamento\DesignPattern\CalculadoraDeDescontos;
use SistemaOrcamento\DesignPattern\CalculadoraDeImpostos;
use SistemaOrcamento\DesignPattern\Impostos\Icms;
use SistemaOrcamento\DesignPattern\Orcamento;

require 'vendor/autoload.php';

/** TESTE impostos */
//$calculadora = new CalculadoraDeImpostos();
//$orcamento = new Orcamento();
//$orcamento->valor = 100;
//echo $calculadora->calcula($orcamento, new Icms());

/** TESTE descontos */
$calculadora2  = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;
echo $calculadora2->calculaDescontos($orcamento);