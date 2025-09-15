<?php

namespace Atividades7\Ex5;
require_once "FiguraGeometrica.php";
class Circulo extends FiguraGeometrica
{
    function calculaArea($raio, $lado2=null) {
        return (3.14*$raio*$raio);
    }
}