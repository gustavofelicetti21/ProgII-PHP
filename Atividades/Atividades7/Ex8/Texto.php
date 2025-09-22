<?php

namespace Atividades7\Ex8;
require_once "Impressora.php";
class Texto extends Impressora
{
    public function imprimir()
    {
        echo "\nTexto impresso:\n-----------------\n--Olha meu texto--";
    }
}