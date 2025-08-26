<?php
require_once 'Cliente.php';
use Atividade5\Ex8\Cliente;

$cliente = new Cliente('gustavo', '10277479908', '49999567737');

// também não vai funcionar, pois está fora da classe
// echo $cliente->nome." ".$cliente->cpf." ".$cliente->telefone;

// usamos diretametne o nome pois é público, e os atributos protegidos e privados são acessados por métodos públicos
echo $cliente->nome." ".$cliente->getCpf()." ".$cliente->getTelefone();