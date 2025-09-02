<?php
require_once "ContaBancaria.php";
use Atividade6\ContaBancaria;

require_once "Produto.php";
use Atividade6\Produto;

require_once "Cliente.php";
use Atividade6\Cliente;

require_once "Usuario.php";
use Atividade6\Usuario;

require_once "Gerente.php";
use Atividade6\Gerente;

require_once "Pedido.php";
use Atividade6\Pedido;

require_once "Carro.php";
use Atividade6\Carro;

require_once "Aluno.php";
use Atividade6\Aluno;

require_once "AlteraParametros.php";
use Atividade6\AlteraParametros;

require_once "CarrinhoDeCompras.php";
use Atividade6\CarrinhoDeCompras;

$conta = new ContaBancaria("1234");
echo $conta->getSaldo()."\n";
$conta->depositar(10);
echo $conta->getSaldo()."\n";
$conta->sacar(7);
echo $conta->getSaldo()."\n";
$conta->sacar(7);
echo "\n".$conta->getSaldo();

$produto = new Produto("pão");
$produto->setValor(5);
echo "\n".$produto->getValor();
$produto->setValor(-1);
$produto->setValor(4);
echo "\n".$produto->getValor();

$cliente = new Cliente("Gustavo");
echo "\n";
$cliente->setCpf("12345678");
$cliente->setCpf("12345678901");
echo "\n".$cliente->getCpf()."\n";
$cliente->setCpf("12345a78901");
echo "\n".$cliente->getCpf()."\n";

$usuario = new Usuario("Gustavo", "1234");
$usuario->validaSenha("123456");
$usuario->validaSenha("1234");

$gerente = new Gerente("Gustavo", 1000);
echo "\n".$gerente->getSalario();
$gerente->setBonus(10);
echo "\n".$gerente->getSalario();

$pedido = new Pedido();
$pedido->addItem("Gustavo");
$pedido->addItem("Cachaça");
$pedido->addItem("Ovo");
$pedido->listarItems();

$carro = new Carro();
$carro->acelerar(100);
$carro->acelerar(50);
$carro->acelerar(60);
$carro->acelerar(50);
$carro->freiar(200);
$carro->freiar(20);

$aluno = new Aluno("Gustavo");
$aluno->setNota(10);
$aluno->setNota(0);
$aluno->setNota(11);
$aluno->setNota(-1);

$alteraParametros = new AlteraParametros();
$alteraParametros->setParametros("parametro");
echo "\n".$alteraParametros->getParametros();

$carrinhoDeCompra = new CarrinhoDeCompras();
$carrinhoDeCompra->addItem("Gustavo", 2, 50);
$carrinhoDeCompra->addItem("Pão", 2, 100);
$carrinhoDeCompra->listarItems();