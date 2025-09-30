<?php

namespace Atividade9\Ex9;
require_once "Cliente.php";
class Loja
{
    private $nome;
    private $clientes=[];

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function addCliente(Cliente $cliente) {
        $this->clientes[] = $cliente;
    }

    public function listaClietes() {
        $msg = "";
        foreach ($this->clientes as $cliente) {
            $msg .= "\nCliente: ".$cliente->nome . "\nCPF: $".$cliente->cpf."\n";
        }
    }
}