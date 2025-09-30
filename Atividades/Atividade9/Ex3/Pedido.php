<?php

namespace Atividade9\Ex3;

require "Produto.php";
class Pedido
{
    private $produtos = [];
    private $vlFinal=0;

    public function addProduto(Produto $produto) {
        $this->produtos[] = $produto;
        $this->vlFinal+=$produto->getPreco();
    }
}