<?php

namespace Atividades7\Ex4;

require_once "Notificacao.php";
class Sms extends Notificacao
{
    public function enviar($mensagem, $origem, $destino) {
        echo "Dados do SMS\n\nEnviante: $origem\nMensagem: $mensagem\nDestino: $destino";
    }
}