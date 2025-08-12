<?php
namespace Atividade3;
class Funcionario
{
    private $nome;
    private $salario;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario): void
    {
        $this->salario = $salario;
    }

    function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    function reajuste($porcentagem) : float {
        $this->salario += $this->salario*($porcentagem/100);
        return $this->salario;
    }
}