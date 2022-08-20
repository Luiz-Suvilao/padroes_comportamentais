<?php

namespace suvilao\DesignPattern\Impostos;

use suvilao\DesignPattern\Orcamento;

class ICPP extends ImpostoCom2Aliquotas
{
    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }
}
