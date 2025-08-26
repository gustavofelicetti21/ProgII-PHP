<?php
namespace Atividade5\Ex3;
class ContaBancaria
{
    // criado como private para proteger o saldo
    private $saldo;

    // criado o get, pois não vejo nescessidade de fazer um set
    public function getSaldo()
    {
        return $this->saldo;
    }

    // se não tiver um valor ja inicia com 0 por padrão
    public function __construct($saldo=0) {
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        $this->saldo -= $valor;
    }
}