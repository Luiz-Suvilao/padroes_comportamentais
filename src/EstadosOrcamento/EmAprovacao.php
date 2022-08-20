<?php

namespace suvilao\DesignPattern\EstadosOrcamento;

use suvilao\DesignPattern\Orcamento;

class EmAprovacao extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }

    public function aprova(Orcamento $orcamento): void
    {
        $orcamento->estado = new Aprovado();
    }

    public function reprova(Orcamento $orcamento): void
    {
        $orcamento->estado = new Reprovado();
    }
}
