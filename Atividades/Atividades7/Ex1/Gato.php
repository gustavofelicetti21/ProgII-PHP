<?php

namespace Atividades7\Ex1;
require_once "Animal.php";
class Gato extends Animal
{
    public function falar($som="miau")
    {
        echo "\n".$som;
    }
}