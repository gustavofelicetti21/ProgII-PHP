<?php

require_once "Repository.php";
require_once "Modelo.php";
require_once "Endereco.php";

class Cliente extends Modelo implements Repository
{
    private string $nome;
    private string $cpf;
    private ?string $telefone = null;
    private ?string $email = null;
    private array $enderecos = [];
    private array $pedidos = [];

    public function validar(): void {}

    public function salvar(object $obj): void {}
    public function listar(): array { return []; }
    public function buscarPorId(int $id): ?object { return null; }
    public function atualizar(object $obj): void {}
    public function deletar(int $id): void {}

    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }

    public function getCpf(): string { return $this->cpf; }
    public function setCpf(string $cpf): void { $this->cpf = $cpf; }

    public function getTelefone(): ?string { return $this->telefone; }
    public function setTelefone(?string $telefone): void { $this->telefone = $telefone; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(?string $email): void { $this->email = $email; }

    public function getEnderecos(): array { return $this->enderecos; }
    public function getPedidos(): array { return $this->pedidos; }

    public function adicionarEndereco(
        string $cep,
        string $rua,
        int $numero,
        ?string $complemento,
        string $bairro,
        string $cidade,
        string $uf
    ): Endereco {}

    public function removerEndereco(Endereco $endereco): void {}

    public function registrarPedido(Pedido $pedido): void {}
}