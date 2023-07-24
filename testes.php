<?php


use SistemaOrcamento\DesignPattern\CalculadoraDeImpostos;
use SistemaOrcamento\DesignPattern\Impostos\Icms;
use SistemaOrcamento\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();
$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms());
