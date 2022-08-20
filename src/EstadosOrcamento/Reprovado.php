<?php

namespace suvilao\DesignPattern\EstadosOrcamento;

use suvilao\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException(
            'Orçamentos reprovados não podem receber descontos'
        );
    }

    protected function finaliza(Orcamento $orcamento): void
    {
        $orcamento->estado = new Finalizado();
    }
}
