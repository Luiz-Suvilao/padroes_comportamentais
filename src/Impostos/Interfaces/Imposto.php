<?php

namespace suvilao\DesignPattern\Impostos\Interfaces;

use suvilao\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}
