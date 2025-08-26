<?php
require_once "Funcionario.php";
require_once "Gerente.php";

use Atividade5\Ex4\Gerente;
use Atividade5\Ex4\Funcionario;

$gerente = new Gerente("Gerente", 10000);
$funcionario = new Funcionario("Funcoinario", 1000);

// esse daqui da erro, pois não está acessado pois está protected
//echo $gerente->getSalario();
///echo $funcionario->getSalario();