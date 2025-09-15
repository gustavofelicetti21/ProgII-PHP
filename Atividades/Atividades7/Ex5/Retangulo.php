<?php
namespace Atividades7\Ex5;
require_once "FiguraGeometrica.php";
class Retangulo extends FiguraGeometrica
{
    function calculaArea($lado1, $lado2) {
        return $lado1*$lado2;
    }
}