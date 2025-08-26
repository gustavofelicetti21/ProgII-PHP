<?php
require_once "Produto.php";
use Atividade5\Ex2\Produto;

//instanciando o objeto produto
$produto1 = new Produto("Geladeira", 3.50);
// exibindo primeira entrada
echo $produto1->nome." custa R$".$produto1->getPreco();

// definindo um novo valor pra produto
$produto1->setPreco(5);

// exibindo saída aos alerações
echo "\n".$produto1->nome." custa R$".$produto1->getPreco();