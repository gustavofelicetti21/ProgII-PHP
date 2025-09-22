<?php

namespace Atividades7\Ex10;
require_once "Transporte.php";
class Onibus extends Transporte
{
    public function calcularTarifa($km, $minutos=null) : void
    {
        echo "\nA tarifa ficou: R$".($km*0.5);
    }
}