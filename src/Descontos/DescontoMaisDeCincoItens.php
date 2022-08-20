<?php

namespace suvilao\DesignPattern\Descontos;

use suvilao\DesignPattern\Orcamento;

class DescontoMaisDeCincoItens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->itens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
