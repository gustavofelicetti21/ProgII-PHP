<?php

namespace Atividade6;

class Cliente
{
    private $nome;
    private $cpf;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf): void
    {
        $flag=false;
        if((strlen($cpf) == 11)&&(intval($cpf)>0)) {
            for ($i=0; $i<11; $i++) {
                if (intval($cpf[$i])==0) {
                    if ($cpf[$i]!='0') {
                        $flag=true;
                    }
                }
            }
        } else {
            echo "digite um valor de válido";
        }

        if (!$flag) {
            $this->cpf = $cpf;
        } else {
            echo "digite um valor de válido";
        }
    }
}