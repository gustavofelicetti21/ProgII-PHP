<?php

namespace Atividade9\Ex4;

class Funcionario
{
    private $nome;
    private $salario;

    public function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }
}