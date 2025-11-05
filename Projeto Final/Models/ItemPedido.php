<?php

require_once "Modelo.php";
require_once "Produto.php";

class ItemPedido extends Modelo
{
    private $produto;
    private $quantidade;
    private $precoUnitario;
    private $precoTotal;

    public function validar() {

    }
}