<?php
namespace Atividades7\Ex3;
class Boleto
{
    public function processar($codigo, $valor) : void{
        echo "----Comprovante----\nPagamento de Boleto:\n$codigo\nValor: R$ $valor\n-------------------\n";
    }
}