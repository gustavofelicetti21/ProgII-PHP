<?php

namespace Atividades7\Ex9;
require_once "Mensagem.php";
class Minusculo extends Mensagem
{
    public function formatar($texto) {
        $texto = strtolower($texto);
        echo "\n".$texto;
    }
}