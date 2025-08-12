<?php
namespace Atividade3;
class Calculadora
{
    private $num1;
    private $num2;

    public function getNum1()
    {
        return $this->num1;
    }

    public function setNum1($num1): void
    {
        $this->num1 = $num1;
    }

    public function getNum2()
    {
        return $this->num2;
    }

    public function setNum2($num2): void
    {
        $this->num2 = $num2;
    }

    public function __construct($num1, $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    function calcular($index){
        $resultado=0;
        switch($index) {
            case "+":
                $resultado = $this->num1 + $this->num2;
                break;
            case "-":
                $resultado = $this->num1 - $this->num2;
                break;
            case "*":
                $resultado = $this->num1 * $this->num2;
                break;
            case "/":
                $resultado = $this->num1 / $this->num2;
                break;
        }
        return $resultado;
    }
}