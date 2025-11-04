<?php
require_once 'Conexao.php';
require_once 'Repositorio.php';
require_once 'Modelo.php';

use AtividadePDO\Modelo;
use AtividadePDO\Repositorio;
use AtividadePDO\Conexao;

class Aluno extends Modelo implements Repositorio {
    public $nome;
    public $idade;
    public $email;
    public $curso;

    public function validar() {
        if (empty($this->nome) || empty($this->email))
            throw new Exception("Nome e email são obrigatórios");
        if ($this->idade < 16 || $this->idade > 100)
            throw new Exception("Idade deve estar entre 16 e 100 anos");
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
            throw new Exception("Email inválido");
        return true;
    }

    public function salvar($obj) {
        $pdo = Conexao::conectar();
        $stmt = $pdo->prepare(
            "INSERT INTO alunos (nome, idade, email, curso) VALUES (:n, :i, :e, :c)"
        );
        return $stmt->execute([
            ':n' => $obj->nome,
            ':i' => $obj->idade,
            ':e' => $obj->email,
            ':c' => $obj->curso
        ]);
    }

    public function listar() {
        $pdo = Conexao::conectar();
        $st = $pdo->query("SELECT * FROM alunos ORDER BY nome ASC");
        return $st->fetchAll(PDO::FETCH_OBJ);
    }

    public function buscarPorId($id) {
        $pdo = Conexao::conectar();
        $st = $pdo->prepare("SELECT * FROM alunos WHERE id = ?");
        $st->execute([$id]);
        return $st->fetch(PDO::FETCH_OBJ);
    }

    public function atualizar($obj) {
        $pdo = Conexao::conectar();
        $st = $pdo->prepare(
            "UPDATE alunos SET nome=?, idade=?, email=?, curso=? WHERE id=?"
        );
        return $st->execute([
            $obj->nome, $obj->idade, $obj->email, $obj->curso, $obj->id
        ]);
    }

    public function deletar($id) {
        $pdo = Conexao::conectar();
        $st = $pdo->prepare("DELETE FROM alunos WHERE id=?");
        return $st->execute([$id]);
    }
}