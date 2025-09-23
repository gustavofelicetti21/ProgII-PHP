<?php
require_once "Projeto.php";
require_once "Desenvolvedor.php";

use Atividade8\Desenvolvedor;
use Atividade8\Projeto;

$dev = new Desenvolvedor("João");
$projeto = new Projeto("Sistema de Gestão", "Criar um sistema para gerenciar tarefas e projetos.");

$dev->setProjetos($projeto);

$tarefa1 = $projeto->adicionarTarefa("Desenvolver Login", "Implementar a tela de login.");
$tarefa2 = $projeto->adicionarTarefa("Criar Banco de Dados", "Configurar as tabelas necessárias.");

?>

<!DOCTYPE html>
<html lang="pt-br">
<div style="display: none;">
    <?php
        $dev->concluirTarefas($tarefa1);
    ?>
</div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório do Projeto</title>
</head>
<body>

<h1>Relatório do Projeto</h1>
<hr>

<h2>Desenvolvedor</h2>
<p>Nome: <?=$dev->nome?></p>
<hr>

<h2>Projeto</h2>
<p><strong>Nome:</strong> <?=$projeto->nome?></p>
<p><strong>Descrição:</strong> <?=$projeto->descricao?></p>
<hr>

<h2>Tarefas</h2>
<?php foreach ($projeto->getTarefas() as $tarefa): ?>
    <h3>Tarefa: <?=$tarefa->getNome()?></h3>
    <p><strong>Descrição:</strong> <?=$tarefa->getDescricao()?></p>
    <p><strong>Status:</strong> <?=$tarefa->isConcluida() ? "Concluída" : "Pendente"?></p>
    <p><strong>Pertence ao Projeto:</strong> <?=$tarefa->getProjeto()->nome?></p>
    <hr>
<?php endforeach; ?>

</body>
</html>