<?php
namespace Atividades7\Ex9;

require_once "Mensagem.php";
class Maiusculo extends Mensagem
{
    public function formatar($texto) {
        $texto = strtoupper($texto);
        echo "\n".$texto;
    }
}