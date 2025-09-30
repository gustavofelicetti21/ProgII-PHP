<?php

namespace Atividade9\Ex3;

class Produto
{
    private $nome;
    private $preco;

    public function __construct($nome, $preco)
    {
        $this->preco = $preco;
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}