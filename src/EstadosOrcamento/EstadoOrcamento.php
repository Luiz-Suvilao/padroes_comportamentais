<?php

namespace suvilao\DesignPattern\EstadosOrcamento;

use DomainException;
use suvilao\DesignPattern\Orcamento;

abstract class EstadoOrcamento
{
    /**
     * @param Orcamento $orcamento
     * @return float
     * @throws DomainException
     */
    abstract protected function calculaDescontoExtra(Orcamento $orcamento): float;

    /**
     * @param Orcamento $orcamento
     * @return void
     */
    protected function aprova(Orcamento $orcamento): void
    {
        throw new DomainException('Este orçamento não pode ser aprovado.');
    }

    /**
     * @param Orcamento $orcamento
     * @return void
     */
    protected function reprova(Orcamento $orcamento): void
    {
        throw new DomainException('Este orçamento não pode ser reprovado.');
    }

    /**
     * @param Orcamento $orcamento
     * @return void
     */
    protected function finaliza(Orcamento $orcamento): void
    {
        throw new DomainException('Este orçamento não pode ser finalizado.');
    }
}
