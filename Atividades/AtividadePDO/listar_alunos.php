<?php
require_once 'Aluno.php';
$a = new Aluno();
$alunos = $a->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
<h2>Alunos Cadastrados</h2>
<a href="form_aluno.php" class="btn btn-success mb-3">Novo Aluno</a>
<table class="table table-bordered">
    <tr>
        <th>ID</th><th>Nome</th><th>Idade</th><th>Email</th><th>Curso</th><th>Ações</th>
    </tr>
    <?php foreach($alunos as $al): ?>
        <tr>
            <td><?= $al->id ?></td>
            <td><?= htmlspecialchars($al->nome) ?></td>
            <td><?= $al->idade ?></td>
            <td><?= htmlspecialchars($al->email) ?></td>
            <td><?= htmlspecialchars($al->curso) ?></td>
            <td>
                <a href="form_aluno.php?id=<?= $al->id ?>" class="btn btn-primary btn-sm">Editar</a>
                <a href="listar_alunos.php?del=<?= $al->id ?>" class="btn btn-danger btn-sm"
                   onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php
if (isset($_GET['del'])) {
    $a->deletar($_GET['del']);
    header('Location: listar_alunos.php');
}
?>
</body>
</html>