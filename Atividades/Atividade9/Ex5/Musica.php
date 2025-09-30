<?php
namespace Atividade9\Ex5;
class Musica
{
    private $nome;
    private $duracao;

    public function __construct($duracao, $nome)
    {
        $this->duracao = $duracao;
        $this->nome = $nome;
    }
}