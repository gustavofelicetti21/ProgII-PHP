<?php
namespace Atividade8;
require_once "Tarefa.php";
class Projeto
{
    public $nome;
    public $descricao;
    private $tarefas = [];

    public function __construct($nome, $descricao) {
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function adicionarTarefa(string $nomeTarefa, string $descricaoTarefa) {
        $tarefa = new Tarefa($nomeTarefa, $descricaoTarefa, $this);
        $this->tarefas[] = $tarefa;
        return $tarefa;
    }

    public function getTarefas() {
        return $this->tarefas;
    }
}