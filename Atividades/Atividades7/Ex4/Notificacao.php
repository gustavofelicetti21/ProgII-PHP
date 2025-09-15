<?php

namespace Atividades7\Ex4;

abstract class Notificacao
{
    public abstract function enviar($mensagem, $origem, $destino);
}