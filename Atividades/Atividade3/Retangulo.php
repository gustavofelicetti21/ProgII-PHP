<?php
namespace Atividade3;
class Retangulo
{
    private $largura;
    private $altura;

    public function getLargura()
    {
        return $this->largura;
    }

    public function setLargura($largura): void
    {
        $this->largura = $largura;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    function __construct($largura, $altura){
        $this->largura = $largura;
        $this->altura = $altura;
    }

    function calculaPerimetro():float{
        return ($this->largura*2)+($this->altura*2);
    }

    function calculaArea():float{
        return $this->largura*$this->altura;
    }
}