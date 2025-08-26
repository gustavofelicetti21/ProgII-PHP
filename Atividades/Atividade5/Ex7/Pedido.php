<?php
namespace Atividade5\Ex7;
use Atividade3\Item;

class Pedido
{
    private $itens = array();

    // criei o construtor vazio só para instanciar o objeto
    public function __construct() {}

    public function addItem($item) {
        // pesquisei essa função que posso usar em array para adicionar semrpe um item ao final
        array_push($this->itens, $item);
    }

    // a listagem quando chamada vai exibir diretamente no console o item em ordem que foi colocado
    public function listaItens() {
        for ($i = 0; $i < count($this->itens); $i++) {
            echo $i+1 . " - ".$this->itens[$i]."\n";
        }
    }
}