<?php

namespace Atividades7\Ex7;
require_once "Veiculo.php";
class Bicicleta extends Veiculo
{
    public function mover() {
        echo "\nA bicicleta está sendo pedalada";
    }
}