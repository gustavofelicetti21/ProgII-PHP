<?php
require_once "Aluno.php";

$aluno = null;
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
$mensagem = '';
$tipoMensagem = '';

// Processar formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $alunoObj = new Aluno();
        
        if (!empty($_POST['id'])) {
            // Modo edição
            $alunoObj->setId((int)$_POST['id']);
            $alunoObj->setNome(trim($_POST['nome']));
            $alunoObj->setIdade((int)$_POST['idade']);
            $alunoObj->setEmail(trim($_POST['email']));
            $alunoObj->setCurso(trim($_POST['curso']));
            
            $alunoObj->atualizar($alunoObj);
            $mensagem = "Aluno atualizado com sucesso!";
            $tipoMensagem = "success";
            // Recarregar dados atualizados
            $aluno = $alunoObj->buscarPorId($alunoObj->getId());
        } else {
            // Modo criação
            $alunoObj->setNome(trim($_POST['nome']));
            $alunoObj->setIdade((int)$_POST['idade']);
            $alunoObj->setEmail(trim($_POST['email']));
            $alunoObj->setCurso(trim($_POST['curso']));
            
            $alunoObj->salvar($alunoObj);
            header("Location: form_aluno.php?sucesso=1");
            exit;
        }
    } catch (Exception $e) {
        $mensagem = $e->getMessage();
        $tipoMensagem = "error";
    }
}

// Verificar se é modo de edição
if ($id) {
    try {
        $alunoObj = new Aluno();
        $aluno = $alunoObj->buscarPorId($id);
        if (!$aluno) {
            $mensagem = "Aluno não encontrado!";
            $tipoMensagem = "error";
            $id = null;
        }
    } catch (Exception $e) {
        $mensagem = $e->getMessage();
        $tipoMensagem = "error";
    }
}

// Verificar mensagem de sucesso via GET
if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1) {
    $mensagem = "Aluno cadastrado com sucesso!";
    $tipoMensagem = "success";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $id ? 'Editar' : 'Cadastrar'; ?> Aluno</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .header p {
            opacity: 0.9;
        }

        .form-container {
            padding: 30px;
        }

        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #667eea;
        }

        .form-group small {
            display: block;
            margin-top: 5px;
            color: #666;
            font-size: 14px;
        }

        .error-message {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }

        .btn {
            flex: 1;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background: #5a6268;
        }

        .required {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><?php echo $id ? 'Editar Aluno' : 'Cadastrar Novo Aluno'; ?></h1>
            <p>Preencha os dados abaixo</p>
        </div>

        <div class="form-container">
            <?php if ($mensagem): ?>
                <div class="alert alert-<?php echo $tipoMensagem === 'success' ? 'success' : 'error'; ?>">
                    <?php echo htmlspecialchars($mensagem); ?>
                </div>
            <?php endif; ?>

            <form id="formAluno" method="POST" action="" novalidate>
                <?php if ($id && $aluno): ?>
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($aluno->getId()); ?>">
                <?php endif; ?>

                <div class="form-group">
                    <label for="nome">Nome <span class="required">*</span></label>
                    <input 
                        type="text" 
                        id="nome" 
                        name="nome" 
                        value="<?php echo $aluno ? htmlspecialchars($aluno->getNome()) : ''; ?>" 
                        required 
                        minlength="3"
                        maxlength="100"
                    >
                    <small>Mínimo de 3 caracteres</small>
                    <div class="error-message" id="nome-error"></div>
                </div>

                <div class="form-group">
                    <label for="idade">Idade <span class="required">*</span></label>
                    <input 
                        type="number" 
                        id="idade" 
                        name="idade" 
                        value="<?php echo $aluno ? htmlspecialchars($aluno->getIdade()) : ''; ?>" 
                        required 
                        min="16" 
                        max="100"
                    >
                    <small>Entre 16 e 100 anos</small>
                    <div class="error-message" id="idade-error"></div>
                </div>

                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="<?php echo $aluno ? htmlspecialchars($aluno->getEmail()) : ''; ?>" 
                        required
                        maxlength="100"
                    >
                    <small>Email válido e único</small>
                    <div class="error-message" id="email-error"></div>
                </div>

                <div class="form-group">
                    <label for="curso">Curso <span class="required">*</span></label>
                    <input 
                        type="text" 
                        id="curso" 
                        name="curso" 
                        value="<?php echo $aluno ? htmlspecialchars($aluno->getCurso()) : ''; ?>" 
                        required 
                        maxlength="50"
                    >
                    <small>Nome do curso do aluno</small>
                    <div class="error-message" id="curso-error"></div>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn btn-primary">
                        <?php echo $id ? 'Atualizar' : 'Cadastrar'; ?>
                    </button>
                    <a href="listar_alunos.php" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Validação client-side
        document.getElementById('formAluno').addEventListener('submit', function(e) {
            let isValid = true;
            
            // Limpar erros anteriores
            document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
            
            // Validar nome
            const nome = document.getElementById('nome').value.trim();
            if (nome.length < 3) {
                document.getElementById('nome-error').textContent = 'Nome deve ter no mínimo 3 caracteres';
                isValid = false;
            }
            
            // Validar idade
            const idade = parseInt(document.getElementById('idade').value);
            if (isNaN(idade) || idade < 16 || idade > 100) {
                document.getElementById('idade-error').textContent = 'Idade deve estar entre 16 e 100 anos';
                isValid = false;
            }
            
            // Validar email
            const email = document.getElementById('email').value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById('email-error').textContent = 'Email inválido';
                isValid = false;
            }
            
            // Validar curso
            const curso = document.getElementById('curso').value.trim();
            if (curso.length === 0) {
                document.getElementById('curso-error').textContent = 'Curso é obrigatório';
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>
</body>
</html>

