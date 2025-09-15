<?php

namespace Atividades7\Ex4;

require_once "Notificacao.php";
class Email extends Notificacao
{
    public function enviar($mensagem, $origem, $destino) {
        echo "\nDados do E-mail\nEnviante: $origem\nMensagem: $mensagem\nDestino: $destino";
    }
}