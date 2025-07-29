<?php
class Produto{
    public string $nome;
    public float $preco;
    public float $desconto;
    
    public function __construct($nome, $desconto){

    }

    public function calculaValor(): float {
        return ($this->preco * $this->desconto);
    }
}
?>