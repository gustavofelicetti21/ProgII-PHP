<?php
namespace Atividades7\Ex10;
require_once "Transporte.php";
class Metro extends Transporte
{
    public function calcularTarifa($km, $minutos=null) : void
    {
        echo "\nA tarifa ficou: R$".($km*0.1);
    }
}