<?php

require_once "Repository.php";
require_once "Modelo.php";
require_once "Endereco.php";

class Cliente extends Modelo implements Repository
{
    private $nome;
    private $cpf;
    private $telefone;
    private $email;
    private $endereco = [];
    private $pedidos = [];

    public function addEndereco(string $cep, string $rua, int $numero, string $complemento, string $bairro, string $cidade, string $uf)
    {

    }

    public function removeEndereco(Endereco $endereco)
    {

    }

    public function validar() {

    }

    public function salvar($obj) {

    }

    public function listar() {

    }

    public function buscarPorId($id) {

    }

    public function atualizar($obj) {

    }

    public function deletar($id) {

    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getEndereco(): array
    {
        return $this->endereco;
    }

    public function getPedidos(): array
    {
        return $this->pedidos;
    }

    public function setTelefone($telefone): void
    {
        $this->telefone = $telefone;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }
}