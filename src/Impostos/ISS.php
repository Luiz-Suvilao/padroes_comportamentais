<?php

namespace suvilao\DesignPattern\Impostos;

use suvilao\DesignPattern\Impostos\Interfaces\Imposto;
use suvilao\DesignPattern\Orcamento;

class ISS implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
