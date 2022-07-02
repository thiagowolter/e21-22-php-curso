<?php 
require_once 'config.php';
require_once 'form.php';

session_start();

if (isset($_POST['login'])) {
    if ($_POST['user'] == $users['1']['user'] && $_POST['senha'] == $users['1']['pass']) {
        $_SESSION['logado'] = $_POST['user'];
        echo "Acesso liberado, carregando...!";
        header("refresh: 2; pag1.php"); 
    } else {
        echo 'Usuário ou senha incorretos, tente novamente!';
    }
}









?>