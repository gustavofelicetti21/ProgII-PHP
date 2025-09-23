<?php
namespace Atividade8;
require_once "Projeto.php";
class Desenvolvedor
{
    public $nome;
    private $projetos = [];

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getProjetos() {
        return $this->projetos;
    }

    public function setProjetos($projeto) {
        $this->projetos[] = $projeto;
    }

    public function concluirTarefas(Tarefa $tarefa) {
        $tarefa->setConcluida(true);
        echo $this->nome . " concluiu a tarefa: " . $tarefa->getNome() . "\n";
    }
}