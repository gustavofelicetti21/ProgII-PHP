<?php

require_once "Modelo.php";

class Endereco extends Modelo
{
    private ?Cliente $cliente = null;
    private ?Restaurante $restaurante = null;
    private string $cep;
    private string $rua;
    private int $numero;
    private ?string $complemento = null;
    private string $bairro;
    private string $cidade;
    private string $uf;

    public function validar(): void {}

    public function getCliente(): ?Cliente { return $this->cliente; }
    public function getRestaurante(): ?Restaurante { return $this->restaurante; }

    public function atribuirAoCliente(Cliente $cliente): void {}
    public function atribuirAoRestaurante(Restaurante $restaurante): void {}
    public function desvincular(): void {}

    public function getCep(): string { return $this->cep; }
    public function setCep(string $cep): void { $this->cep = $cep; }

    public function getRua(): string { return $this->rua; }
    public function setRua(string $rua): void { $this->rua = $rua; }

    public function getNumero(): int { return $this->numero; }
    public function setNumero(int $numero): void { $this->numero = $numero; }

    public function getComplemento(): ?string { return $this->complemento; }
    public function setComplemento(?string $complemento): void { $this->complemento = $complemento; }

    public function getBairro(): string { return $this->bairro; }
    public function setBairro(string $bairro): void { $this->bairro = $bairro; }

    public function getCidade(): string { return $this->cidade; }
    public function setCidade(string $cidade): void { $this->cidade = $cidade; }

    public function getUf(): string { return $this->uf; }
    public function setUf(string $uf): void { $this->uf = $uf; }
}