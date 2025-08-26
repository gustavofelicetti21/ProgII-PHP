<?php
namespace Atividade5\Ex8;
class Cliente
{
    public $nome;
    protected $cpf;
    private $telefone;

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function __construct($nome, $cpf, $telefone) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }
}

// desse modo não funcionarioa o cpf e o telefone, pois está fora do limite da classe, os gets funcionam por estar dentro do escopo
// $cliente = new Cliente('gustavo', '10277479908', '49999567737');
// echo $cliente->nome." ".$cliente->cpf." ".$cliente->telefone;