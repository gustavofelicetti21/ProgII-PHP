<?php
namespace Atividade5\Ex4;
require_once "Funcionario.php";
class Gerente extends Funcionario
{
    // criado o gerente herdando os objetos de funcionario
    public $time;
    public function __construct($nome, $salario, $time)
    {
        parent::__construct($nome, $salario);
        $this->time = $time;
    }
}