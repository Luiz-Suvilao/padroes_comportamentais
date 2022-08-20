<?php

namespace suvilao\DesignPattern;

use suvilao\DesignPattern\Impostos\Interfaces\Imposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}
