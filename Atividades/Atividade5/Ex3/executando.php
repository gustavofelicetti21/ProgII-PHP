<?php
require_once "ContaBancaria.php";
use Atividade5\Ex3\ContaBancaria;

// instancia o objeto com 100 reais na conta e mostra o saldo
$contaBancaria = new ContaBancaria(100);
echo $contaBancaria->getSaldo()."\n";

// deposita 10 reais e mostra o saldo
$contaBancaria->depositar(10);
echo $contaBancaria->getSaldo()."\n";

// saca 10 reais e mostra o saldo
$contaBancaria->sacar(10);
echo $contaBancaria->getSaldo()."\n";