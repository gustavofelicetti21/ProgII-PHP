<?php
namespace Atividades7\Ex7;
abstract class Veiculo
{
    protected $marca;
    protected $modelo;
    protected $cor;

    abstract public function mover();
}