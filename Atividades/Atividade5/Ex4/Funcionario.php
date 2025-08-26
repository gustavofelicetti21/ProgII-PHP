<?php
namespace Atividade5\Ex4;
class Funcionario
{
    public $nome;
    protected $salario;

    protected function setSalario($salario)
    {
        $this->salario = $salario;
    }

    protected function getSalario() {
        return $this->salario;
    }

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }
}