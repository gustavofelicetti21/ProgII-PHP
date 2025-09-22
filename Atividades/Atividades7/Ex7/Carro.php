<?php

namespace Atividades7\Ex7;
require_once "Veiculo.php";
class Carro extends Veiculo
{
    function mover() {
        echo "\nO carro foi movido";
    }
}