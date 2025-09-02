<?php
namespace Atividade6;
class Carro
{
    private $velocidade;

    public function acelerar($velocidade) {
        if ($velocidade+$this->velocidade <= 200) {
            $this->velocidade+= $velocidade;
            echo "\n$this->velocidade Km/h";
        } else {
            echo "\nVelocidade máxima atingida";
        }
    }

    public function freiar($velocidade) {
        if ($this->velocidade-$velocidade >= 0) {
            $this->velocidade-= $velocidade;
            echo "\n$this->velocidade Km/h";
        } else {
            echo "\nVelocidade mínima atingida";
        }
    }
}