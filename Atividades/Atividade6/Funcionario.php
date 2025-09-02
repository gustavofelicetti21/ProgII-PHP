<?php
namespace Atividade6;
class Funcionario
{
    public $nome;
    protected $salario;

    protected function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }
}