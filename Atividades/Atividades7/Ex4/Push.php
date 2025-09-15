<?php

namespace Atividades7\Ex4;
require_once "Notificacao.php";
class Push
{
    public function enviar($mensagem, $origem, $destino) {
        echo "Dados do Push\n\nEnviante: $origem\nMensagem: $mensagem\nDestino: $destino";
    }
}