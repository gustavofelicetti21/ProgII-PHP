<?php
namespace Atividade4;
class Conta
{
    private $titular;
    private $saldo;
    private $numero;

    public function __construct($nome, $saldo) {
        $this->nome = $nome;
        $this->saldo = $saldo;
        $this->numero = rand(1000, 9999);
    }

    public function exibirDados() {
        echo "\n\nNome: $this->nome\nSaldo: R$$this->saldo\nConta: $this->numero";
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }
}