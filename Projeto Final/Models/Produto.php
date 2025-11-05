<?php

require_once "Repository.php";
require_once "Modelo.php";

class Produto extends Modelo implements Repository
{
    private $nome;
    private $descricao;
    private $preco;
    private $ingredientes = [];

    public function validar() {

    }

    public function salvar($obj) {

    }

    public function listar() {

    }

    public function buscarPorId($id) {

    }

    public function atualizar($obj) {

    }

    public function deletar($id) {

    }

    public function addIngrediente($ingrediente)
    {
    }

    public function removerIngrediente($ingrediente)
    {
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco): void
    {
        $this->preco = $preco;
    }

    public function getIngredientes(): array
    {
        return $this->ingredientes;
    }

    public function setIngredientes(array $ingredientes): void
    {
        $this->ingredientes = $ingredientes;
    }
}