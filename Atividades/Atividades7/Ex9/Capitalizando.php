<?php

namespace Atividades7\Ex9;
require_once "Mensagem.php";
class Capitalizando extends Mensagem
{
    public function formatar($texto) {
        $texto = ucwords($texto);
        echo "\n".$texto;
    }
}