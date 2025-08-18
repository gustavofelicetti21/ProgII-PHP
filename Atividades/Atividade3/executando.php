<?php
require_once "Aluno.php";
require_once "Carro.php";
require_once "ContaBancaria.php";
require_once "Calculadora.php";
require_once "Contato.php";
require_once "Retangulo.php";
require_once "Funcionario.php";
require_once "Item.php";
require_once "Carrinho.php";
require_once "Livro.php";
require_once "Conversor.php";

use Atividade3\Calculadora;
use Atividade3\Carro;
use Atividade3\Aluno;
use Atividade3\ContaBancaria;
use Atividade3\Contato;
use Atividade3\Retangulo;
use Atividade3\Funcionario;
use atividade3\Item;
use atividade3\Carrinho;
use atividade3\Livro;
use atividade3\conversor;

$carro = new Carro("VolksWagen", "Gol", "2020");
$carro->exibirinformacoes();

$aluno1 = new Aluno("Gustavo", 10);
echo "\nO aluno ".$aluno1->getNome()." ".($aluno1->verificarAprovacao()? "Aprovado" : "Reprovado");

$aluno2 = new Aluno("Pedro", 6);
echo "\nO aluno ".$aluno2->getNome()." ".($aluno2->verificarAprovacao()? "Aprovado" : "Reprovado");

$banco = new ContaBancaria(1000, "Gustavo");
$banco->depositar(100);
echo "\n\nO saldo de ".$banco->getTitular()." é R$".$banco->getSaldo();

$calculadora = new Calculadora(100, 200);
echo "\n\n".$calculadora->getNum1()."+".$calculadora->getNum2()."=".$calculadora->calcular("+").
    "\n".$calculadora->getNum1()."-".$calculadora->getNum2()."=".$calculadora->calcular("-").
    "\n".$calculadora->getNum1()."X".$calculadora->getNum2()."=".$calculadora->calcular("*").
    "\n".$calculadora->getNum1()."/".$calculadora->getNum2()."=".$calculadora->calcular("/");

$contato1 = new Contato("Gustavo", "(49) 99956-7737", "mail@mail.com");
$contato2 = new Contato("Pedro", "(49) 99956-7737", "mail@mail.com");
$contato3 = new Contato("Marcos", "(49) 99956-7737", "mail@mail.com");

$contatos = [$contato1, $contato2, $contato3];
foreach ($contatos as $contato) {
    echo "\n\nNome: ".$contato->getNome()."\nTelefone: ".$contato->getTelefone()."\ne-mail: ".$contato->getEmail();
}

$retangulo = new Retangulo(10, 20);
echo "\n\nPerímetro: ".$retangulo->calculaPerimetro()."\nÁrea: ".$retangulo->calculaArea();

$funcionario = new Funcionario("Gustavo", 1000);
echo "\n\nO novo salário é: R$".$funcionario->reajuste(10);

$item1 = new Item("Batata", 20);
$item2 = new Item("Arroz", 20);

$carrinho = new Carrinho();
$carrinho->addItem($item1, 5);
$carrinho->addItem($item2, 4);

$carrinho->listarItems();

$livros = [new Livro("O menino de pijama lsitrado", 2005, "sla"), new Livro("Pai rico pai pobre", 2024, "tbm n sei")];
foreach ($livros as $livro) {
    if (intval(date('Y'))-$livro->getAno()>=15){
        echo ("\n\nTitulo: ".$livro->getTitulo()."\nAno: ".$livro->getAno()."\nAutor: ".$livro->getAutor());
    }
}

$conversor = new Conversor();
$celsius = $conversor->celsius(4);
$fahrenheit = $conversor->fahrenheit(4);
echo "\n\nCelsius: ".$celsius."\nFahrenheit: ".$fahrenheit;