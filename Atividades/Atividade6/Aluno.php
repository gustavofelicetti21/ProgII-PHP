<?php
namespace Atividade6;
class Aluno
{
    private $nome;
    private $nota;

    public function __construct($nome) {
        $this->nome = $nome;
        $this->nota = 0;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNota($nota) {
        if (($nota>=0)&&($nota<=10)) {
            $this->nota = $nota;
            echo "\n$this->nota";
        } else {
            echo "\nnota inválida";
        }
    }
}