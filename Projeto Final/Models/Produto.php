<?php

class Produto
{
    private $nome;
    private $descricao;
    private $preco;
    private $ingredientes=[];

    public function __construct($nome, $descricao, $preco, $ingredientes) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->ingredientes = $ingredientes;
    }

    public function __destruct() {
        echo "Produto Morrido";
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getIngredientes() {
        return $this->ingredientes;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setIngredientes($ingredientes) {
        $this->ingredientes = $ingredientes;
    }

    public function addIngrediente($ingrediente) {
        $this->ingredientes[] = $ingrediente;
    }

    public function removerIngrediente($ingrediente) {
        $key = array_search($ingrediente, $this->ingredientes);

        if($key !== false) {
            unset($this->ingredientes[$key]);

            $this->ingredientes = array_values($this->ingredientes);

            return true;
        }

        return false;
    }
}