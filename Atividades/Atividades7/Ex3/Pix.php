<?php
namespace Atividades7\Ex3;
require_once "Pagamento.php";
class Pix extends Pagamento
{
    public function processar($chave, $valor) : void {
        echo "----Comprovante----\nPix enviado, chave:\n$chave\nValor: R$ $valor\n-------------------\n";
    }
}