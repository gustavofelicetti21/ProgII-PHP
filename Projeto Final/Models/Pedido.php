<?php

require_once "Repository.php";
require_once "Modelo.php";
require_once "Cliente.php";
require_once "Restaurante.php";

class Pedido extends Modelo implements Repository
{
    private Restaurante $restaurante;
    private Cliente $cliente;
    private array $itens = [];
    private int $valorTotal = 0;

    public function validar(): void {}

    public function salvar(object $obj): void {}
    public function listar(): array { return []; }
    public function buscarPorId(int $id): ?object { return null; }
    public function atualizar(object $obj): void {}
    public function deletar(int $id): void {}

    public function getRestaurante(): Restaurante { return $this->restaurante; }
    public function setRestaurante(Restaurante $restaurante): void { $this->restaurante = $restaurante; }

    public function getCliente(): Cliente { return $this->cliente; }
    public function setCliente(Cliente $cliente): void { $this->cliente = $cliente; }

    public function getItens(): array { return $this->itens; }

    public function getValorTotal(): int { return $this->valorTotal; }
    public function setValorTotal(int $valorTotal): void { $this->valorTotal = $valorTotal; }

    public function adicionarItem(Produto $produto, int $quantidade, int $valorUnitario): ItemPedido {}
    public function removerItem(ItemPedido $item): void {}
    public function recalcularTotal(): void {}
}