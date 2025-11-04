<?php
require_once 'Aluno.php';

$a = new Aluno();

try {
    $a->id = $_POST['id'] ?? null;
    $a->nome = $_POST['nome'];
    $a->idade = $_POST['idade'];
    $a->email = $_POST['email'];
    $a->curso = $_POST['curso'];
    $a->validar();

    if ($a->id)
        $a->atualizar($a);
    else
        $a->salvar($a);

    header('Location: listar_alunos.php');
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
