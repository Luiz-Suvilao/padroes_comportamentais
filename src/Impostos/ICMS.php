<?php

namespace suvilao\DesignPattern\Impostos;

use suvilao\DesignPattern\Impostos\Interfaces\Imposto;
use suvilao\DesignPattern\Orcamento;

class ICMS implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}
