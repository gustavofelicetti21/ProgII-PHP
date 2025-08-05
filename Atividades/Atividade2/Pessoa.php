<?php
namespace Atividade2;
class Pessoa
{
    private string $nome;
    private int $idade;
    private string $email;
    public function __construct(string $nome, int $idade, string $email){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    function setNome(string $nome){
        $this->nome = $nome;
    }
    function getNome() : string {
        return $this->nome;
    }

    function setIdade(int $idade){
        $this->idade = $idade;
    }
    function getIdade() : int {
        return $this->idade;
    }

    function setEmail(string $email){
        $this->email = $email;
    }
    function getEmail() : string {
        return $this->email;
    }

    public function exibirDados() : void{
        echo "Nome: ".$this->nome."\nE-mail: ".$this->email."\nIdade: ".$this->idade;
    }

    public function ehMaior(): bool{
        return $this->idade >= 18;
    }

    public function aniversario():void{
        $this->idade++;
    }
}