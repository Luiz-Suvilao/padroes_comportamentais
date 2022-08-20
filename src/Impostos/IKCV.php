<?php

namespace suvilao\DesignPattern\Impostos;

use suvilao\DesignPattern\Orcamento;

class IKCV extends ImpostoCom2Aliquotas
{
    /**
     * @param Orcamento $orcamento
     * @return bool
     */
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->itens > 3;
    }

    /**
     * @param Orcamento $orcamento
     * @return float
     */
    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    /**
     * @param Orcamento $orcamento
     * @return float
     */
    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}
