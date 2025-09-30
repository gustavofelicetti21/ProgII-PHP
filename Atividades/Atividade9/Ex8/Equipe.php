<?php

namespace Atividade9\Ex8;
require_once 'Projeto.php';
class Equipe
{
    private $nome;
    private $integrantes=[];
    private $projetos = [];

    public function __construct($nome, $integrantes) {
        $this->nome = $nome;
        $this->integrantes = $integrantes;
    }

    public function addIntegrante($integrante) {
        $this->integrantes[] = $integrante;
    }

    public function addProjeto(Projeto $projeto) {
        $this->projetos[] = $projeto;
    }

    public function getProjetos() {
        return $this->projetos;
    }
}