<?php
require 'models/Materia.php';

class PerfilController {
    private $materiaModel;
    
    public function __construct() {
        if(!isset($_SESSION['usuario_id'])) {
            header('Location: /learnflow/auth/login');
            exit;
        }
        $this->materiaModel = new Materia();
    }
    
    public function index() {
        if($_POST && isset($_POST['add_materia'])) {
            $this->materiaModel->adicionar($_SESSION['usuario_id'], $_POST['nome'], $_POST['anotacoes']);
        }
        
        if(isset($_GET['excluir'])) {
            $this->materiaModel->excluir($_GET['excluir'], $_SESSION['usuario_id']);
        }
        
        $materias = $this->materiaModel->listar($_SESSION['usuario_id']);
        view('perfil', ['materias' => $materias]);
    }
}