<?php

namespace Atividade3;

class Conversor
{
    function fahrenheit($temp){
        return ($temp*1.8)+32;
    }

    function celsius($temp) {
        return ($temp-32)/1.8;
    }
}