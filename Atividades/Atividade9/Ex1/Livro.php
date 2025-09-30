<?php

namespace Atividade9\Ex1;

class Livro
{
    private $titulo;
    private $autor;
    private $pag;

    public function __construct($titulo, $autor, $pag)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->pag = $pag;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
}