<?php

namespace Atividades7\Ex8;
require_once "Impressora.php";
class Imagem extends Impressora
{
    public function imprimir()
    {
        echo "\nImagem impressa:\n----------------\n---Olha a imagem---";
    }
}