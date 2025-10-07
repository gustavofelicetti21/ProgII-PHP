<?php

require_once "Endereco.php";
require_once "Produto.php";
class Restaurante
{
    private $nome;
    private $cnpj;
    private $endereco;
    private $produtos=[];
    private $pedidos=[];

    public function __construct(string $nome, string $cnpj) {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
    }

    public function setEndereco(string $cep, string $rua, int $numero, string $complemento, string $bairro, string $cidade, string $estado) {
        $this->endereco = new Endereco($cep, $rua, $numero, $complemento, $bairro, $cidade, $estado);
    }

    public function addProduto($nome, $descricao, $preco, $ingredientes) {
        $this->produtos[] = new Produto($nome, $descricao, $preco, $ingredientes);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getProdutos() {
        return $this->produtos;
    }

    public function addPedido(Pedido $pedido) {
        $this->pedidos[] = $pedido;
    }
}