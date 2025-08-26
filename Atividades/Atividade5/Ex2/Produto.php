<?php

namespace Atividade5\Ex2;

class Produto
{
    public $nome;
    private $preco;

    //encapsulamento
    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco): void
    {
        $this->preco = $preco;
    }

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}