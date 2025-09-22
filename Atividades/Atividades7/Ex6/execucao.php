<?php

namespace Atividades7\Ex6;

require_once "Relatorio.php";

$rel = new Relatorio();

$rel->gerar("Vendas de hoje");
$rel->gerar("Vendas do mês", ["item1", "item2", "item3"]);
$rel->gerar("Vendas do ano", ["itemA", "itemB"], "json");