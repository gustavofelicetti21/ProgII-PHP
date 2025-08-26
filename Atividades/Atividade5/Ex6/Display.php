<?php
namespace Atividade5\Ex6;
require_once "Config.php";
class Display extends Config
{
    public function __construct($resolucao, $tema, $layot)
    {
        parent::__construct($resolucao, $tema, $layot);
    }

    public function alteraTema($tema) {
        $this->tema = $tema;
    }

    public function getTema() {
        return $this->tema;
    }

    public function alteraLayout($layout) {
        $this->layot = $layot;
    }

    public function getLayout() {
        return $this->layot;
    }

    public function alteraResolucao($resolucao) {
        $this->resolucao = $resolucao;
    }

    public function getResolucao() {
        return $this->resolucao;
    }
}