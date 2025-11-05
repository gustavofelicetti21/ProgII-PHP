<?php
require_once __DIR__ . "/Aluno.php";

$repo = new Aluno();

$errors = [];
$success = null;

// Modo edição: carrega dados
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$data = ['id' => '', 'nome' => '', 'idade' => '', 'email' => '', 'curso' => ''];

if ($id > 0) {
    $row = $repo->buscarPorId($id);
    if ($row) {
        $data = $row;
    } else {
        $errors[] = "Aluno não encontrado.";
    }
}

// Submit (criar/atualizar)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id    = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    $nome  = trim($_POST['nome'] ?? '');
    $idade = (int)($_POST['idade'] ?? 0);
    $email = trim($_POST['email'] ?? '');
    $curso = trim($_POST['curso'] ?? '');

    // validação server-side básica
    if ($nome === '')  $errors[] = "Nome é obrigatório.";
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "E-mail inválido.";
    if ($idade <= 0) $errors[] = "Idade deve ser maior que zero.";
    if ($curso === '') $errors[] = "Curso é obrigatório.";

    if (!$errors) {
        // monta objeto Aluno para salvar/atualizar
        $al = new Aluno();
        if ($id) $al->setId($id);
        $al->setNome($nome);
        $al->setIdade($idade);
        $al->setEmail($email);
        $al->setCurso($curso);

        try {
            if ($id) {
                $repo->atualizar($al);
                $success = "Aluno atualizado com sucesso.";
            } else {
                $repo->salvar($al);
                $success = "Aluno cadastrado com sucesso.";
                $id = $al->getId(); // atualiza ID para permanecer na página em modo edição, se quiser
            }
            // recarrega dados exibidos no form
            $data = [
                'id' => $al->getId(),
                'nome' => $al->getNome(),
                'idade' => $al->getIdade(),
                'email' => $al->getEmail(),
                'curso' => $al->getCurso(),
            ];
        } catch (Throwable $e) {
            $errors[] = "Erro ao salvar: " . $e->getMessage();
        }
    }
}

function h($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title><?php echo $data['id'] ? "Editar Aluno #".h($data['id']) : "Cadastrar Aluno"; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{font-family:system-ui,Segoe UI,Arial,sans-serif;max-width:820px;margin:24px auto;padding:0 16px}
        .box{border:1px solid #ddd;border-radius:8px;padding:16px;margin-top:16px}
        .row{display:flex;gap:12px;flex-wrap:wrap}
        .col{flex:1 1 240px;min-width:240px}
        label{display:block;margin:8px 0 4px;font-weight:600}
        input{width:100%;padding:10px;border:1px solid #ccc;border-radius:6px}
        .actions{margin-top:16px;display:flex;gap:8px}
        .btn{padding:10px 14px;border:1px solid #0a7;border-radius:6px;background:#0a7;color:#fff;cursor:pointer}
        .btn.sec{background:#fff;color:#0a7}
        .msg{padding:10px 12px;border-radius:6px;margin-bottom:12px}
        .ok{background:#e8fff1;border:1px solid #78d39b}
        .err{background:#fff0f0;border:1px solid #e3a3a3}
    </style>
    <script>
        // Validação client-side simples
        function valida(e){
            const f = e.target;
            const nome  = f.nome.value.trim();
            const idade = parseInt(f.idade.value, 10);
            const email = f.email.value.trim();
            const curso = f.curso.value.trim();

            let erros = [];
            if(!nome) erros.push("Nome é obrigatório.");
            if(!email || !/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) erros.push("E-mail inválido.");
            if(!(idade > 0)) erros.push("Idade deve ser maior que zero.");
            if(!curso) erros.push("Curso é obrigatório.");

            if(erros.length){
                alert(erros.join("\n"));
                e.preventDefault();
            }
        }
        window.addEventListener('DOMContentLoaded',()=>{
            document.getElementById('fAluno').addEventListener('submit',valida);
        });
    </script>
</head>
<body>

<h1><?php echo $data['id'] ? "Editar Aluno" : "Cadastrar Aluno"; ?></h1>

<?php if ($success): ?>
    <div class="msg ok"><?php echo h($success); ?></div>
<?php endif; ?>
<?php if ($errors): ?>
    <div class="msg err">
        <?php foreach ($errors as $er) echo "<div>".h($er)."</div>"; ?>
    </div>
<?php endif; ?>

<div class="box">
    <form id="fAluno" method="post" action="">
        <input type="hidden" name="id" value="<?php echo h($data['id']); ?>">
        <div class="row">
            <div class="col">
                <label for="nome">Nome</label>
                <input id="nome" name="nome" type="text" required value="<?php echo h($data['nome']); ?>">
            </div>
            <div class="col">
                <label for="idade">Idade</label>
                <input id="idade" name="idade" type="number" min="1" required value="<?php echo h($data['idade']); ?>">
            </div>
            <div class="col">
                <label for="email">E-mail</label>
                <input id="email" name="email" type="email" required value="<?php echo h($data['email']); ?>">
            </div>
            <div class="col">
                <label for="curso">Curso</label>
                <input id="curso" name="curso" type="text" required value="<?php echo h($data['curso']); ?>">
            </div>
        </div>
        <div class="actions">
            <button class="btn" type="submit"><?php echo $data['id'] ? "Salvar alterações" : "Cadastrar"; ?></button>
            <a class="btn sec" href="listar_alunos.php">Voltar à lista</a>
        </div>
    </form>
</div>

</body>
</html>