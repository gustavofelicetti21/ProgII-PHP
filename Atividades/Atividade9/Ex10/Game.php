<?php

namespace Atividade9\Ex10;
class Game
{
    private $nome;
    private $categoria;

    function __construct($nome, $categoria) {
        $this->nome = $nome;
        $this->categoria = $categoria;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCategoria() {
        return $this->categoria;
    }
}