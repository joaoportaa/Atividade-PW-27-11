<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'learnflow_mvc');
define('DB_USER', 'root');
define('DB_PASS', '');

function view($arquivo, $dados = []) {
    extract($dados);
    require 'views/header.php';
    require 'views/' . $arquivo . '.php';
    require 'views/footer.php';
}