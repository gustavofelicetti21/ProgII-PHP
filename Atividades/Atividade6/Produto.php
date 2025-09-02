<?php
namespace Atividade6;
class Produto
{
    private $nome;
    private $valor;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): void
    {
        if ($valor>0) {
            $this->valor = $valor;
        } else {
            echo "\nDigite um valor válido";
        }
    }
}