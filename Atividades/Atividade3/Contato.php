<?php
namespace Atividade3;
class Contato
{
    private $nome;
    private $telefone;
    private $email;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    function __construct($nome, $telefone, $email){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }
}