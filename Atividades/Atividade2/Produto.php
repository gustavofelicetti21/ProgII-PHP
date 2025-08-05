<?php
namespace Atividade2;
class Produto
{
    private string $nome;
    private float $preco;
    private int $quantidade;

    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }
    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }
    public function setQuantidade(int $quantidade): void
    {
        $this->quantidade = $quantidade;
    }

    public function valorTotal(): float {
        return $this->preco * $this->quantidade;
    }

    public function exibirDetalhes():void{
        echo("Detalhes do produto:\nNome: $this->nome\nPreco: $this->preco\nQuantidade: $this->quantidade\nValor Total: ".$this->valorTotal());
    }
}