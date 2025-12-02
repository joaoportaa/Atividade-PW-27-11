<?php
require 'models/Usuario.php';

class AuthController {
    private $usuarioModel;
    
    public function __construct() {
        $this->usuarioModel = new Usuario();
    }
    
    public function login() {
        if($_POST) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            
            if($this->usuarioModel->login($email, $senha)) {
                header('Location: /learnflow/home');
                exit;
            } else {
                $erro = "Login falhou!";
            }
        }
        view('login', ['erro' => $erro ?? null]);
    }
    
    public function cadastro() {
        if($_POST) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            
            if($this->usuarioModel->cadastrar($nome, $email, $senha)) {
                header('Location: /learnflow/auth/login');
                exit;
            }
        }
        view('cadastro');
    }
    
    public function logout() {
        session_destroy();
        header('Location: /learnflow/home');
        exit;
    }
}