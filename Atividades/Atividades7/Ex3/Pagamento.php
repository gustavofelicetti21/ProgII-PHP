<?php

namespace Atividades7\Ex3;
abstract class Pagamento
{
    protected abstract function processar($chave, $valor):void;
}