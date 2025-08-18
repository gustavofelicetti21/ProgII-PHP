<?php
namespace Atividade3;

require_once "Item.php";
class Carrinho
{
    private $itens = [];
    private $quantidade = [];

    function addItem(Item $item, int $quantidade) {
        $this->itens[] = $item;
        $this->quantidade[] = $quantidade;
    }

    function listarItems() {
        for ($i = 0; $i < count($this->itens); $i++) {
            echo ("\n\nNome: ".$this->itens[$i]->getNome()."\nPreco: ".$this->itens[$i]->getPreco()."\nQuantidade: ".$this->quantidade[$i]."\nValor: R$".$this->itens[$i]->getPreco()*$this->quantidade[$i]);
        }
    }
}