<?php
require_once "./Produto.php";
class ItemPedido
{
    private $produto;
    private $quantidade;
    private $precoUnitario;
    private $precoTotal;

    public function __construct(Produto $produto, $quantidade) {
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $produto->getPreco();
        $this->precoTotal = $produto->preco * $quantidade;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function getPrecoUnitario()
    {
        return $this->precoUnitario;
    }

    public function getPrecoTotal()
    {
        return $this->precoTotal;
    }
}