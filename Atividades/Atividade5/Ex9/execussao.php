<?php
require_once 'ContaBancaria.php';
use Atividade5\Ex9\ContaBancaria;

// instacia o objeto e mostra o saldo
$contaBancaria = new ContaBancaria(1000);
echo $contaBancaria->getSaldo()."\n";

// saca 999 e mostra o saldo
$contaBancaria->sacar(999);
echo $contaBancaria->getSaldo()."\n";
// vai chegar a mensagem de sucesso

// tenta sacar mais 999
$contaBancaria->sacar(999);
// exibe mensagem de erro
echo $contaBancaria->getSaldo()."\n";
// saldo continua igual