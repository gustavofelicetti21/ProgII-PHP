<?php

class Conexao
{
    private static ?PDO $pdo = null;

    public static function conectar(): PDO
    {
        if (!self::$pdo) {
            $caminhoBanco = __DIR__ . '/../Banco/banco.db';

            self::$pdo = new PDO('sqlite:' . $caminhoBanco);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->exec('PRAGMA foreign_keys = ON;');
        }

        return self::$pdo;
    }
}