<?php

namespace suvilao\DesignPattern;

use suvilao\DesignPattern\Descontos\DescontoMaisDeCincoItens;
use suvilao\DesignPattern\Descontos\DescontoMaisDeQuinhentosReais;
use suvilao\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDeCincoItens(
            new DescontoMaisDeQuinhentosReais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
