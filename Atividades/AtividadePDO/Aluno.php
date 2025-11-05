<?php

require_once "Modelo.php";
require_once "Repositorio.php";
require_once "Conexao.php";

class Aluno extends Modelo implements Repositorio {
    private $nome;
    private $idade;
    private $email;
    private $curso;

    // Implementação do metodo abstrato
    public function validar() {
        if (empty($this->nome) || empty($this->email)) {
            throw new Exception("Nome e email são obrigatórios");
        }
        if ($this->idade < 16 || $this->idade > 100) {
            throw new Exception("Idade deve estar entre 16 e 100 anos");
        }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Email inválido");
        }
        return true;
    }

    // Implementação dos métodos da interface Repositorio
    private static function fromRow(array $r): Aluno {
        $a = new self();
        $a->setId((int)$r['id']);
        $a->setNome($r['nome']);
        $a->setIdade((int)$r['idade']);
        $a->setEmail($r['email']);
        $a->setCurso($r['curso']);
        return $a;
    }

    // implemente os métodos da interface Repositorio:
    public function salvar($obj) {
        $pdo = Conexao::conectar();
        $st = $pdo->prepare('INSERT INTO alunos (nome, idade, email, curso) VALUES (?,?,?,?)');
        $st->execute([$obj->getNome(), $obj->getIdade(), $obj->getEmail(), $obj->getCurso()]);
        $obj->setId((int)$pdo->lastInsertId());
        return $obj->getId();
    }

    public function listar() {
        $pdo = Conexao::conectar();
        $st = $pdo->query('SELECT id, nome, idade, email, curso FROM alunos ORDER BY id DESC');
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {
        $pdo = Conexao::conectar();
        $st = $pdo->prepare('SELECT id, nome, idade, email, curso FROM alunos WHERE id = ?');
        $st->execute([(int)$id]);
        return $st->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function atualizar($obj) {
        $pdo = Conexao::conectar();
        $st = $pdo->prepare('UPDATE alunos SET nome = ?, idade = ?, email = ?, curso = ? WHERE id = ?');
        $st->execute([$obj->getNome(), $obj->getIdade(), $obj->getEmail(), $obj->getCurso(), $obj->getId()]);
        return $st->rowCount() > 0;
    }

    public function deletar($id) {
        $pdo = Conexao::conectar();
        $st = $pdo->prepare('DELETE FROM alunos WHERE id = ?');
        $st->execute([(int)$id]);
        return $st->rowCount() > 0;
    }

    // Getters e Setters
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): void
    {
        $this->idade = $idade;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso): void
    {
        $this->curso = $curso;
    }
}