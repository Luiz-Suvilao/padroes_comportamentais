<?php

namespace suvilao\DesignPattern\Impostos;

use suvilao\DesignPattern\Impostos\Interfaces\Imposto;
use suvilao\DesignPattern\Orcamento;

abstract class ImpostoCom2Aliquotas implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($this->deveAplicarTaxaMaxima($orcamento)) {
            return $this->calculaTaxaMaxima($orcamento);
        }

        return $this->calculaTaxaMinima($orcamento);
    }

    abstract protected function calculaTaxaMinima(Orcamento $orcamento): float;

    abstract protected function calculaTaxaMaxima(Orcamento $orcamento): float;

    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;
}
