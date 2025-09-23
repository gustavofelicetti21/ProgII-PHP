<?php
namespace Atividade8;
class Tarefa
{
    private $nome;
    private $descricao;
    private $projeto;
    private $concluida=false;

    public function __construct($nome, $descricao, $projeto)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->projeto = $projeto;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getProjeto()
    {
        return $this->projeto;
    }

    public function setProjeto($projeto): void
    {
        $this->projeto = $projeto;
    }

    public function isConcluida(): bool
    {
        return $this->concluida;
    }

    public function setConcluida(bool $concluida): void
    {
        $this->concluida = $concluida;
    }
}