<?php

namespace Atividade9\Ex5;
require_once "Musica.php";
class Playlist
{
    private $nome;
    private $musicas=[];

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function addMuscia(Musica $musica){
        $this->musicas[] = $musica;
    }

    public function getMusicas(){
        return $this->musicas;
    }
}