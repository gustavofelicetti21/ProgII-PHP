<?php
require_once "Produto.php";
use Atividade5\Ex1\Produto;

$produto = new Produto('ovo', 100);
echo $produto->nome.' custa R$'.$produto->preco;