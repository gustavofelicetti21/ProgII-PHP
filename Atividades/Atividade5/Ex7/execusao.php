<?php
require_once 'Pedido.php';
use Atividade5\Ex7\Pedido;

// adicionei 3 itens e pedi para listar
$pedido = new Pedido();
$pedido->addItem("mamão");
$pedido->addItem("pera");
$pedido->addItem("cachorro");
$pedido->listaItens();