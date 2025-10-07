<?php

require_once "Cliente.php";
require_once "ItemPedido.php";
require_once "Restaurante.php";

class Pedido
{
    private $itemPedido=[];
    private $cliente;
    private $vlTotal=0;
    private $restaurante;

    public function __construct(Cliente $cliente, Restaurante $restaurante) {
        $this->cliente = $cliente;
        $this->restaurante = $restaurante;
        $restaurante->addPedido($this);
    }

    public function additemPedido(Produto $produto, $quantidade) {
        $this->itemPedido[] = new ItemPedido($produto, $quantidade);
        $this->vlTotal += $quantidade * $produto->getPreco();
    }

    public function detalhesPedido() {

    }
}