<?php
namespace Atividade4;
class Aluno
{
    public $nome;
    private $matricula;
    private $notas;
    private $media;

    public function getNome()
    {
        return $this->nome;
    }

    public function __construct($nome, $matricula)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    function adicionarNota($nota) {
        $this->notas[] = $nota;
    }

    private function calculaNotas()
    {
        foreach ($this->notas as $nota) {
            $this->media+= $nota;
        }
        $this->media = $this->media/count($this->notas);
    }

    public function situacao() {
        $this->calculaNotas();
        return $this->media>= 7 ? "Aprovado" : "Reprovado";
    }
}