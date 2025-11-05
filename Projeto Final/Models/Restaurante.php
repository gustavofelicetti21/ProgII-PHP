<?php

require_once "Endereco.php";
require_once "Produto.php";
require_once "Repository.php";
require_once "Modelo.php";
class Restaurante extends Modelo implements Repository
{
    private $nome;
    private $cnpj;
    private $endereco;
    private $produtos = [];
    private $pedidos = [];

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


    public function setEndereco(string $cep, string $rua, int $numero, string $complemento, string $bairro, string $cidade, string $estado)
    {
    }

    public function addProduto($nome, $descricao, $preco, $ingredientes)
    {
    }

    public function addPedido(Pedido $pedido)
    {
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getProdutos(): array
    {
        return $this->produtos;
    }
}