<?php

namespace Atividades7\Ex7;
require_once "Veiculo.php";
class Aviao extends Veiculo
{
    public function mover()
    {
        echo "\nO avião agora está voando";
    }
}