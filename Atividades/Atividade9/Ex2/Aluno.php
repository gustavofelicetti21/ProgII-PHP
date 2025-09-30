<?php

namespace Atividade9\Ex2;

class Aluno
{
    private $nome;
    private $matricula;

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }
}