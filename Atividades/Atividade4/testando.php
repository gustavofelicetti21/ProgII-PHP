<?php
require_once "Aluno.php";
use Atividade4\Aluno;

require_once "Conta.php";
use Atividade4\Conta;

require_once "Livro.php";
use Atividade4\Livro;

$aluno1 = new Aluno('Gustavo', 428968);
$aluno2 = new Aluno('Ruan', 377699);

$aluno1->adicionarNota(7);
$aluno1->adicionarNota(7);
$aluno1->adicionarNota(7);
$aluno2->adicionarNota(6);
$aluno2->adicionarNota(6);
$aluno2->adicionarNota(6);

echo "Aluno: $aluno1->nome foi ".$aluno1->situacao()."\nAluno: $aluno2->nome foi ".$aluno2->situacao();

$conta1 = new Conta("Carlos Silva", 500);
$conta2 = new Conta("Ana Oliveira", 1200);

echo $conta1->exibirDados();
$conta1->depositar(300);
echo $conta1->exibirDados();

$livro = new Livro("Gustavo", "Gustavo", 2026, 40, true);
$livro = new Livro("Gustavo", "Gustavo", 2025, -1, true);
$livro = new Livro("Gustavo", "", 2025, 40, true);
$livro = new Livro("Gustavo", "Gustavo", 2025, 40, true);
echo "\n\nFinalmente, Autor: ".$livro->getAutor();