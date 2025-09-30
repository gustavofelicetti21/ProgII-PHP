<?php

namespace Atividade9\Ex7;
require_once "Itens.php";
class Carrinho
{
    private $itens=[];

    public function addItem(Itens $item) {
        $this->itens[] = $item;
    }

    public function listItens() {
        $msg = "";
        foreach ($this->itens as $item) {
            $msg .= "\nItem: ".$item->nome . "\nPreco: R$".$item->preco."\n";
        }
    }

    public function countItems() {
        return count($this->itens);
    }
}