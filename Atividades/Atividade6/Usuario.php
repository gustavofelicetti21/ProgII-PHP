<?php
namespace Atividade6;
class Usuario
{
    public $nome;
    private $senha;

    public function __construct($nome, $senha) {
        $this->nome = $nome;
        $this->senha = strval("$senha");
    }

    public function validaSenha($senha) {
        if ($this->senha !== strval($senha)) {
            echo "\nSenha incorreta";
        } else {
            echo "\nSenha correta";
        }
    }
}