<?php
namespace Atividades7\Ex1;
require_once "Animal.php";
class Cachorro extends Animal
{
    public function falar($som="au")
    {
        echo "\n".$som;
    }
}