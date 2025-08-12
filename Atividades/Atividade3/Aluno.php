<?php
namespace Atividade3;
class Aluno
{
    private $nome;
    private $media;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getMedia()
    {
        return $this->media;
    }

    public function setMedia($media): void
    {
        $this->media = $media;
    }

    function __construct($nome, $media) {
        $this->nome = $nome;
        $this->media = $media;
    }

    function verificarAprovacao() : bool {
        if ($this->media>=7)
            return true;
        else
            return false;
    }
}