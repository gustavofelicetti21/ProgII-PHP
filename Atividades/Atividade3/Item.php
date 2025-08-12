<?php
namespace Atividade3;
class Item
{
    private $nome;
    private $preco;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco): void
    {
        $this->preco = $preco;
    }

    function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }
}