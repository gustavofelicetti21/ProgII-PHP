<?php
require_once __DIR__ . "/Aluno.php";

$repo = new Aluno();
$msg = null;
$err = null;

// exclusão (básica, via GET com confirmação no front)
if (isset($_GET['del'])) {
    $delId = (int)$_GET['del'];
    try {
        $ok = $repo->deletar($delId);
        $msg = $ok ? "Aluno #{$delId} excluído com sucesso." : "Nenhum registro removido (ID pode não existir).";
    } catch (Throwable $e) {
        $err = "Erro ao excluir: " . $e->getMessage();
    }
}

$rows = $repo->listar();

function h($v){ return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Alunos - Lista</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{font-family:system-ui,Segoe UI,Arial,sans-serif;max-width:1000px;margin:24px auto;padding:0 16px}
        .top{display:flex;justify-content:space-between;align-items:center;gap:12px}
        .btn{padding:10px 14px;border:1px solid #0a7;border-radius:6px;background:#0a7;color:#fff;text-decoration:none}
        .btn.sec{background:#fff;color:#0a7}
        table{width:100%;border-collapse:collapse;margin-top:16px}
        th,td{border:1px solid #ddd;padding:8px 10px}
        th{background:#f6f6f6;text-align:left}
        .msg{padding:10px 12px;border-radius:6px;margin:12px 0}
        .ok{background:#e8fff1;border:1px solid #78d39b}
        .err{background:#fff0f0;border:1px solid #e3a3a3}
        .act a{margin-right:8px}
    </style>
    <script>
        function confirmarExclusao(id){
            if(confirm("Confirmar exclusão do aluno #"+id+"?")){
                window.location = "listar_alunos.php?del="+id;
            }
        }
    </script>
</head>
<body>

<div class="top">
    <h1>Alunos</h1>
    <a class="btn" href="form_aluno.php">Cadastrar novo</a>
</div>

<?php if ($msg): ?><div class="msg ok"><?php echo h($msg); ?></div><?php endif; ?>
<?php if ($err): ?><div class="msg err"><?php echo h($err); ?></div><?php endif; ?>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>E-mail</th>
        <th>Curso</th>
        <th style="width:160px">Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!$rows): ?>
        <tr><td colspan="6">Nenhum aluno cadastrado.</td></tr>
    <?php else: foreach ($rows as $r): ?>
        <tr>
            <td><?php echo h($r['id']); ?></td>
            <td><?php echo h($r['nome']); ?></td>
            <td><?php echo h($r['idade']); ?></td>
            <td><?php echo h($r['email']); ?></td>
            <td><?php echo h($r['curso']); ?></td>
            <td class="act">
                <a class="btn sec" href="form_aluno.php?id=<?php echo (int)$r['id']; ?>">Editar</a>
                <a class="btn" href="javascript:void(0)" onclick="confirmarExclusao(<?php echo (int)$r['id']; ?>)">Excluir</a>
            </td>
        </tr>
    <?php endforeach; endif; ?>
    </tbody>
</table>

</body>
</html>
