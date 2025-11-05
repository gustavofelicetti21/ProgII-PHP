<?php

require_once "Repository.php";
require_once "Modelo.php";
require_once "Cliente.php";
require_once "ItemPedido.php";
require_once "Restaurante.php";

class Pedido extends Modelo implements Repository
{
    private $itemPedido = [];
    private $cliente;
    private $vlTotal = 0;
    private $restaurante;

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

    public function additemPedido(Produto $produto, $quantidade)
    {
    }

    public function detalhesPedido()
    {
    }
}