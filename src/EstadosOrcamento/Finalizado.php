<?php

namespace suvilao\DesignPattern\EstadosOrcamento;

use suvilao\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException(
            'Orçamentos finalizados não podem receber descontos'
        );
    }
}
