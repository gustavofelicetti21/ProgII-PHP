<?php
namespace Atividades7\Ex3;
require_once "Pagamento.php";
class Cartao extends Pagamento
{
    public function processar($metodo, $valor) : void{
        echo "----Comprovante----\nPagamento no $metodo:\n------Realizado------\nValor: R$ $valor\n-------------------\n";
    }
}