<?php

namespace Atividade9\Ex4;

require_once 'Funcionario.php';
class Empresa
{
    private $nome;
    private $cnpj;
    private $funcionarios = [];

    public function __construct($nome, $cnpj)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
    }

    public function addFuncionario(Funcionario $funcionario) {
        $this->funcionarios[] = $funcionario;
    }

    public function listarFuncionarios() {
        $msg = "";

        foreach ($this->funcionarios as $funcionario) {
            $msg.= $this->msgFuncionario($funcionario);
        }
    }

    public function infoFuncionario(Funcionario $funcionario) {
        if (in_array($funcionario, $this->funcionarios, true)) {
            return "\nFuncnionário: ".$funcionario->getNome() . "\nSalario: R$".$funcionario->getSalario()."\n";
        } else {
            return "funcionario não achado";
        }
    }

    private function msgFuncionario(Funcionario $funcionario)
    {
        return "\nFuncnionário: ".$funcionario->getNome() . "\nSalario: R$".$funcionario->getSalario()."\n";
    }
}