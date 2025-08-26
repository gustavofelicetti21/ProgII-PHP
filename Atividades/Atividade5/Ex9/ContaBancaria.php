<?php
namespace Atividade5\Ex9;
class ContaBancaria
{
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

    public function sacar($valor) {
        if ($valor < $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque efetuado\n";
        } else {
            echo "Saldo insuficiente\n";
        }
    }
}