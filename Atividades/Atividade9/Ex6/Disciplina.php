<?php

namespace Atividade9\Ex6;

class Disciplina
{
    private $nome;
    private $professor;

    public function __construct($nome, $professor) {
        $this->nome = $nome;
        $this->professor = $professor;
    }
}