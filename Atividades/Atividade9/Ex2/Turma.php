<?php

namespace Atividade9\Ex2;

require_once 'Aluno.php';

class Turma
{
    private $alunos = [];

    public function addAluno(Aluno $aluno) {
        $this->alunos = $aluno;
    }

    public function getAlunos() {
        return $this->alunos;
    }
}