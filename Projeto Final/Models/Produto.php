<?php

require_once "Repository.php";
require_once "Modelo.php";
require_once "Restaurante.php";

class Produto extends Modelo implements Repository
{
    private string $nome;
    private ?string $descricao = null;
    private Restaurante $restaurante;
    private array $ingredientes = [];

    public function validar(): void {}

    public function salvar(object $obj): void {}
    public function listar(): array { return []; }
    public function buscarPorId(int $id): ?object { return null; }
    public function atualizar(object $obj): void {}
    public function deletar(int $id): void {}

    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }

    public function getDescricao(): ?string { return $this->descricao; }
    public function setDescricao(?string $descricao): void { $this->descricao = $descricao; }

    public function getRestaurante(): Restaurante { return $this->restaurante; }
    public function setRestaurante(Restaurante $restaurante): void { $this->restaurante = $restaurante; }

    public function getIngredientes(): array { return $this->ingredientes; }

    public function adicionarIngrediente(string $nome): IngredienteProduto {}
    public function removerIngrediente(IngredienteProduto $ingrediente): void {}
}