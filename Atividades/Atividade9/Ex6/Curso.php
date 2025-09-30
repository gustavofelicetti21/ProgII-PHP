<?php

namespace Atividade9\Ex6;
require_once 'Disciplina.php';
class Curso
{
    private $nome;
    private $disciplinas=[];

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function addDisciplinas(Disciplina $disciplina) {
        $this->disciplinas[] = $disciplina;
    }

    public function getDisciplinas() {
        return $this->disciplinas;
    }
}