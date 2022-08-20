<?php

namespace suvilao\DesignPattern\Descontos;

use suvilao\DesignPattern\Orcamento;

class DescontoMaisDeQuinhentosReais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
