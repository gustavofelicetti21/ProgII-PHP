<?php
require_once 'Display.php';
use Atividade5\Ex6\Display;

$display = new Display("1920x1080", "white", "4:3");

// vai dar erro assim
// $display->layout = "16:9";

// para funiconar vai ser desse modo, utilizando os métodos da classe filha, que alteram os parâmetros por conta do protected
echo $display->getResolucao()."\n";
$display->alteraResolucao("1280x720");
echo $display->getResolucao();