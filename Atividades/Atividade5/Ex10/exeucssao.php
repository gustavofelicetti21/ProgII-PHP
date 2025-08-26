<?php
require_once "ConexaoBD.php";
use Atividade5\Ex10\ConexaoBD;

$conexao = new ConexaoBD();

// valida o status, vai ser por padrão falso
echo $conexao->getConexao();
// altera o status, que vai chamar o metodo privado
$conexao->executaConexao();

// confirma o status
echo $conexao->getConexao();