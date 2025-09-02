<?php
namespace Atividade6;
use Atividade6\Funcionario;
require_once "Funcionario.php";
class Gerente extends Funcionario
{
    public function setBonus($bonus) {
        $this->salario += ($bonus/100)*$this->salario;
    }
}