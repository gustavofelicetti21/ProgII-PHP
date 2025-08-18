<?php
namespace Atividade3;
class Livro
{
    private $titulo;
    private $ano;
    private $autor;
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }
    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano): void
    {
        $this->ano = $ano;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }

    function __construct($titulo, $ano, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
    }
}