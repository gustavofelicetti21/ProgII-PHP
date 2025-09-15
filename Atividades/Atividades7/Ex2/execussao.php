<?php
use Atividades7\Ex2\Calculadora;
require_once 'Calculadora.php';

$calculadora = new Calculadora();
echo $calculadora->somar(1,2,3);
echo "\n";
echo $calculadora->somar(1,2);