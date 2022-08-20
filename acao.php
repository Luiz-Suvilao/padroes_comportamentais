<?php

use suvilao\DesignPattern\CalculadoraDeImpostos;
use suvilao\DesignPattern\Impostos\ICMS;
use suvilao\DesignPattern\Impostos\ISS;
use suvilao\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();

$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new ICMS());
echo PHP_EOL;
echo $calculadora->calcula($orcamento, new ISS());
