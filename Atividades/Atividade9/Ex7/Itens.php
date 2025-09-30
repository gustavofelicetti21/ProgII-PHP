<?php

namespace Atividade9\Ex7;
class Itens
{
    private $nome;
    private $preco;

    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}