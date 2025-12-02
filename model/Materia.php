<?php
require 'models/Database.php';

class Materia {
    private $db;
    
    public function __construct() {
        $this->db = Database::conectar();
    }
    
    public function adicionar($usuario_id, $nome, $anotacoes) {
        $stmt = $this->db->prepare("INSERT INTO materias (usuario_id, nome, anotacoes) VALUES (?, ?, ?)");
        return $stmt->execute([$usuario_id, $nome, $anotacoes]);
    }
    
    public function listar($usuario_id) {
        $stmt = $this->db->prepare("SELECT * FROM materias WHERE usuario_id = ?");
        $stmt->execute([$usuario_id]);
        return $stmt->fetchAll();
    }
    
    public function excluir($id, $usuario_id) {
        $stmt = $this->db->prepare("DELETE FROM materias WHERE id = ? AND usuario_id = ?");
        return $stmt->execute([$id, $usuario_id]);
    }
}