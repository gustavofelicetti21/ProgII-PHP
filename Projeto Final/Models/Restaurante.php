<?php

require_once "Endereco.php";
require_once "Produto.php";
require_once "Repository.php";
require_once "Modelo.php";

class Restaurante extends Modelo implements Repository
{
    private string $nome;
    private string $cnpj;
    private ?Endereco $endereco = null;
    private array $produtos = [];
    private array $pedidos = [];

    public function validar(): void {}

    public function salvar(object $obj): void {}
    public function listar(): array { return []; }
    public function buscarPorId(int $id): ?object { return null; }
    public function atualizar(object $obj): void {}
    public function deletar(int $id): void {}

    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }

    public function getCnpj(): string { return $this->cnpj; }
    public function setCnpj(string $cnpj): void { $this->cnpj = $cnpj; }

    public function getEndereco(): ?Endereco { return $this->endereco; }

    public function definirEndereco(
        string $cep,
        string $rua,
        int $numero,
        ?string $complemento,
        string $bairro,
        string $cidade,
        string $uf
    ): Endereco {}

    public function removerEndereco(): void {}

    public function getProdutos(): array { return $this->produtos; }
    public function registrarProduto(Produto $produto): void {}
    public function desregistrarProduto(Produto $produto): void {}

    public function getPedidos(): array { return $this->pedidos; }
    public function registrarPedido(Pedido $pedido): void {}
}