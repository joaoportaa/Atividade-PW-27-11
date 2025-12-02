<?php
class Database {
    private static $pdo;
    
    public static function conectar() {
        if(self::$pdo === null) {
            try {
                self::$pdo = new PDO(
                    "mysql:host=".DB_HOST.";dbname=".DB_NAME,
                    DB_USER,
                    DB_PASS
                );
            } catch(PDOException $e) {
                die("Erro: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}