<?php

namespace Atividades7\Ex8;
require_once "Impressora.php";
class Pdf extends Impressora
{
    public function imprimir()
    {
        echo "\nPDF impresso:\n-------------\nOlha meu PDF";
    }
}