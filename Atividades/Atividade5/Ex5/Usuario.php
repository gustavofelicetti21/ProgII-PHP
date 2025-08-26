<?php
namespace Atividade5\Ex5;
class Usuario
{
    public $nome;
    private $senha;

    public function __construct($nome, $senha) {
        $this->nome = $nome;
        $this->senha = $senha;
    }

    // criei com operador ternário pois facilita a leitura
    public function verificaSenha($senha) {
        return $this->senha === $senha ? 'correta' : 'incorreta';
    }
}