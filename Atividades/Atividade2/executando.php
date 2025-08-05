<?php
require_once "Pessoa.php";
use \Atividade2\Pessoa;
    $p1 = new Pessoa("Pedro", 22, "pedro@gmail.com");
    $p2 = new Pessoa("Joao", 21, "joao@gmail.com");
    $p3 = new Pessoa("Maria", 59, "maria@gmail.com");
    $pessoas = [$p1, $p2, $p3];

    foreach ($pessoas as $pessoa) {
        echo $pessoa->exibirDados()."\n\n";
    }