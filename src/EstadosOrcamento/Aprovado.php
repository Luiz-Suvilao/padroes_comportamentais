<?php

namespace suvilao\DesignPattern\EstadosOrcamento;

use suvilao\DesignPattern\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function finaliza(Orcamento $orcamento): void
    {
        $orcamento->estado = new Finalizado();
    }
}
