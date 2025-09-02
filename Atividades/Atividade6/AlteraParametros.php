<?php
namespace Atividade6;
require_once "Config.php";
class AlteraParametros extends Config
{
    public function setParametros($parametros) {
        $this->parametros = $parametros;
    }

    public function getParametros() {
        return $this->parametros;
    }
}