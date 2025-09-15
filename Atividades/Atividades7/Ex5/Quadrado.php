<?php

namespace Atividades7\Ex5;
require_once "FiguraGeometrica.php";
class Quadrado extends FiguraGeometrica
{
    function calculaArea($lado1, $lado2=null) {
        return $lado1*$lado1;
    }
}