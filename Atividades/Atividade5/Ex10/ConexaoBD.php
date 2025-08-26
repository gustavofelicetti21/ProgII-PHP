<?php
namespace Atividade5\Ex10;
class ConexaoBD
{
    // inicia como false de inicio
    private $conectado=false;

    private function conectar() {
        // operador ternário simples, se está conectado vira false caso não true
        $this->conectado = $this->conectado ? false : true;
        echo "Conectado ao banco\n";
    }

    public function getConexao() {
        // fiz mesmo uso de operador ternário para dar o retorno
        return $this->conectado ? "Conectado ao banco\n" : "Não conectado ao banco\n";
    }

    // metodo publico que executa conexao
    public function executaConexao() {
        $this->conectar();
    }
}