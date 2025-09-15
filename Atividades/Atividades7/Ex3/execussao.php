<?php
require_once "Pix.php";
use Atividades7\Ex3\Pix;

require_once "Cartao.php";
use Atividades7\Ex3\Cartao;

require_once "Boleto.php";
use Atividades7\Ex3\Boleto;

$pix = new Pix();
$pix->processar("123.456.789-01", 100);

$cartao = new Cartao();
$cartao->processar("Crédito", 100);

$boleto = new Boleto();
$boleto->processar("1245691828261090206", 100);