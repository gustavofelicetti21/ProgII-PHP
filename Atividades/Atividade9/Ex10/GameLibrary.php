<?php

namespace Atividade9\Ex10;
require_once "Game.php";
class GameLibrary
{
    private $games=[];

    public function addGame(Game $game) {
        $this->games[] = $game;
    }

    public function getGames() {
        return $this->games;
    }

    public function listarPorCategoria($categoria) {
        foreach ($this->games as $game) {
            if ($game->getCategoria() == $categoria) {
                echo "\nO jogo: $game->getNome() é da categoria: " . $categoria."\n";
            }
        }
    }
}