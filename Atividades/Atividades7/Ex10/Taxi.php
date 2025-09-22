<?php

namespace Atividades7\Ex10;
require_once "Transporte.php";
class Taxi extends Transporte
{
    public function calcularTarifa($km, $minutos) : void
    {
        $tarifa = ($km*1)+($minutos*0.1);
        echo "\nA tarifa ficou: R$".$tarifa;
    }
}