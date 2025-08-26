<?php
require_once "Usuario.php";
use Atividade5\Ex5\Usuario;

$usuario = new Usuario("Gustavo", "8btls101");

// aqui um teste simples, uma tentativa errada e outra certa, só para ver o retorno
echo $usuario->verificaSenha("123")."\n";
echo $usuario->verificaSenha("8btls101");