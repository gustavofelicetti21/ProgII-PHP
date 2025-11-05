<?php

require_once "Modelo.php";

class Endereco extends Modelo
{
    private $cep;
    private $rua;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;

    public function validar(){

    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep): void
    {
        $this->cep = $cep;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function setRua($rua): void
    {
        $this->rua = $rua;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    public function getComplemento()
    {
        return $this->complemento;
    }

    public function setComplemento($complemento): void
    {
        $this->complemento = $complemento;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro): void
    {
        $this->bairro = $bairro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade): void
    {
        $this->cidade = $cidade;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf): void
    {
        $this->uf = $uf;
    }
}