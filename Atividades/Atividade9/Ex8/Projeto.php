<?php

namespace Atividade9\Ex8;
class Projeto
{
    private $titulo;
    private $prazo;

    public function __construct($titulo, $prazo) {
        $this->titulo = $titulo;
        $this->prazo = $prazo;
    }
}