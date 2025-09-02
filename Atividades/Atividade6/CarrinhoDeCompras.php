<?php

namespace Atividade6;

class CarrinhoDeCompras
{
    private $item = [];
    private $quantidade = [];
    private $valor = [];
    private $total = [];

    function addItem(string $item, int $quantidade, float $valor) {
        $this->item[] = $item;
        $this->quantidade[] = $quantidade;
        $this->valor[] = $valor;
        $this->total[] = $quantidade * $valor;
    }

    function listarItems() {
        for ($i = 0; $i < count($this->item); $i++) {
            echo ("\n\nNome: ".$this->item[$i]
                ."\nPreco: ".$this->valor[$i]
                    ."\nQuantidade: ".$this->quantidade[$i]
                            ."\nTotal: R$".$this->total[$i]);
        }
    }
}