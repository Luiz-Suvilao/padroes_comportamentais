<?php

namespace suvilao\DesignPattern;

use suvilao\DesignPattern\EstadosOrcamento\EmAprovacao;
use suvilao\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    /**
     * @var $valor  float
     */
    public float $valor;

    /**
     * @var $itens int
     */
    public int $itens;

    /**
     * @var $estado EstadoOrcamento
     */
    public EstadoOrcamento $estado;

    public function __construct()
    {
        $this->estado = new EmAprovacao();
    }

    /**
     * @return void
     */
    public function aplicaDescontoExtra(): void
    {
        $this->estado->calculaDescontoExtra($this);
    }

    /**
     * @return void
     */
    public function aprovaOrcamento(): void
    {
        $this->estado->aprova($this);
    }

    public function reprovaOrcamento(): void
    {
        $this->estado->reprova($this);
    }

    /**
     * @return void
     */
    public function finalizaOrcamento(): void
    {
        $this->estado->finaliza($this);
    }
}
