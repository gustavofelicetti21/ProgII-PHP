<?php

namespace Atividade6;

class Pedido
{
    private $itens = [];
    function addItem($item) {
        $this->itens[] = $item;
    }

    function listarItems() {
        for ($i = 0; $i < count($this->itens); $i++) {
            echo ("\nNome: ".$this->itens[$i]);
        }
    }
}