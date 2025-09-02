<?php
namespace Atividade6;
class ContaBancaria
{
    private $conta;
    private $saldo;

    public function __construct($conta)
    {
        $this->conta = $conta;
        $this->saldo = 0;
    }

    public function getConta()
    {
        return $this->conta;
    }

    public function getSaldo(): int
    {
        return $this->saldo;
    }

    public function sacar($valor)
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente";
        }
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }
}