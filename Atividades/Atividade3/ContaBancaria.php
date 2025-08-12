<?php

namespace Atividade3;
class ContaBancaria
{
    private $titular;
    private $saldo;

    public function getTitular()
    {
        return $this->titular;
    }

    public function setTitular($titular): void
    {
        $this->titular = $titular;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }

    function __construct($saldo, $titular)
    {
        $this->saldo = $saldo;
        $this->titular = $titular;
    }

    function depositar($saldo)
    {
        $this->saldo += $saldo;
    }

    function sacar($saldo) {
        $this->saldo -= $saldo;
    }
}