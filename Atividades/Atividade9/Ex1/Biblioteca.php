<?php

namespace Atividade9\Ex1;

require_once "Livro.php";

class Biblioteca {
    private $livros = [];
    private $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }
    public function listarLivros() {
        foreach($this->livros as $livro) {
            echo $livro->getTitulo() . "\n";
        }
    }
}