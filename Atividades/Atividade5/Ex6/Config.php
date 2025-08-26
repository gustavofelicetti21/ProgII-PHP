<?php
namespace Atividade5\Ex6;
class Config
{
    protected $resolucao;
    protected $tema;
    protected $layot;

    public function __construct($resolucao, $tema, $layot) {
        $this->resolucao = $resolucao;
        $this->tema = $tema;
        $this->layot = $layot;
    }
}