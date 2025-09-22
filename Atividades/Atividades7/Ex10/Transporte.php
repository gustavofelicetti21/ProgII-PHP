<?php

namespace Atividades7\Ex10;

abstract class Transporte
{
    abstract function calcularTarifa($km, $minutos);
}