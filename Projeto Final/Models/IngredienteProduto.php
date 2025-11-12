<?php

require_once "Modelo.php";
require_once "Produto.php";

class IngredienteProduto extends Modelo
{
    private string $nome;
    private Produto $produto;

    public function validar(): void {}

    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }

    public function getProduto(): Produto { return $this->produto; }
    public function setProduto(Produto $produto): void { $this->produto = $produto; }
}