<?php
namespace Atividade4;
use Cassandra\Date;

class Livro
{
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $numPag;
    private bool $disponivel;

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }

    public function getAnoPublicacao()
    {
        return $this->anoPublicacao;
    }

    public function setAnoPublicacao($anoPublicacao): void
    {
        $this->anoPublicacao = $anoPublicacao;
    }

    public function getNumPag()
    {
        return $this->numPag;
    }

    public function setNumPag($numPag): void
    {
        $this->numPag = $numPag;
    }

    public function getDisponivel()
    {
        return $this->disponivel;
    }

    public function setDisponivel($disponivel): void
    {
        $this->disponivel = $disponivel;
    }

    public function __construct($titulo, $autor, $anoPublicacao, $numPag, $disponivel)
    {
        if($anoPublicacao>intval(Date('Y'))){
            echo "\n\nVai lançar no futuro?";
            return false;
        } else {
            $this->anoPublicacao = $anoPublicacao;
        }
        if ($numPag<=0) {
            echo "\n\nLivro invisível?";
            return false;
        } else {
            $this->numPag = $numPag;
        }
        if (($titulo == '' || $titulo==null)||($autor=='' || $autor==null)){
            echo "\n\nVai deixar mais campos vazios???";
            return false;
        }else {
            $this->autor = $autor;
            $this->titulo = $titulo;
        }
        $this->disponivel = $disponivel;
        return true;
    }
}