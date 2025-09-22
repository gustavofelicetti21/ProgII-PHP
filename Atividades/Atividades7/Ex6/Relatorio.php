<?php

namespace Atividades7\Ex6;

class Relatorio
{
    public function __call($nome, $parametros)
    {
        if ($nome === "gerar") {
            $qtd = count($parametros);

            if ($qtd === 1) {
                echo "Relatório: ".$parametros[0]."\n";
            } elseif ($qtd === 2) {
                echo "Relatório: ".$parametros[0]." | Dados: ".implode(", ", $parametros[1])."\n";
            } elseif ($qtd === 3) {
                echo "Relatório: ".$parametros[0]." | Dados: ".implode(", ", $parametros[1])." | Formato: ".$parametros[2]."\n";
            } else {
                echo "Assinatura inválida!\n";
            }
        }
    }
}