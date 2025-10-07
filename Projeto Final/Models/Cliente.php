<?php
require_once "Endereco.php";
class Cliente
{
    private $nome;
    private $cpf;
    private $telefone;
    private $email;
    private $endereco = [];
    private $pedidos=[];

    public function __construct(string $nome, string $cpf, string $telefone, string $email) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEndereco(): array
    {
        return $this->endereco;
    }

    public function getPedidos() {
        return $this->pedidos;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function addEndereco(string $cep, string $rua, int $numero, string $complemento, string $bairro, string $cidade, string $uf) {
        $this->endereco[] = new Endereco($cep, $rua, $numero, $complemento, $bairro, $cidade, $uf);
    }

    public function removeEndereco(Endereco $endereco) {
        $key = array_search($endereco, $this->endereco, true);

        if ($key !== false) {
            unset($this->endereco[$key]);

            $this->endereco = array_values($this->endereco);

            return true;
        }
        return false;
    }
}