<?php
namespace Atividade3;
class Carro
{
    private $marca;
    private $modelo;
    private $ano;

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano): void
    {
        $this->ano = $ano;
    }

    function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
    function exibirinformacoes() : void{
        echo ("Modelo: $this->modelo\nMarca: $this->marca\nAno: $this->ano\n");
    }
}