<?php

require_once "Modelo.php";
require_once "Produto.php";
require_once "Pedido.php";

class ItemPedido extends Modelo
{
    private Produto $produto;
    private int $quantidade;
    private int $valorUnitario;
    private Pedido $pedido;

    public function validar(): void {}

    public function getProduto(): Produto { return $this->produto; }
    public function setProduto(Produto $produto): void { $this->produto = $produto; }

    public function getQuantidade(): int { return $this->quantidade; }
    public function setQuantidade(int $quantidade): void { $this->quantidade = $quantidade; }

    public function getValorUnitario(): int { return $this->valorUnitario; }
    public function setValorUnitario(int $valorUnitario): void { $this->valorUnitario = $valorUnitario; }

    public function getPedido(): Pedido { return $this->pedido; }
    public function setPedido(Pedido $pedido): void { $this->pedido = $pedido; }

    public function calcularSubtotal(): int { return 0; }
}