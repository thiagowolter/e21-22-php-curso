<?php 
require_once 'config.php';
require_once 'form.php';

session_start();

if (isset($_POST['logar'])) {
    $loginUser = $_POST['user'];
    $senhaUser = $_POST['senha'];

    $procuraLogin = $login->query('SELECT USER_USER, USER_PASSWORD from USERS;');

    $logins = $procuraLogin->fetchAll(PDO::FETCH_ASSOC);

    foreach ($logins as $login) {
            if($login['USER_USER'] == $loginUser && $login['USER_PASSWORD'] == $senhaUser){
                $_SESSION['logado'] = $_POST['user'];
                echo "Acesso liberado, carregando...!";
                 header("refresh: 2; pag1.php");
                 
            } else {
                echo 'senha errada tente novamente';
            }
        }
    
    
    
}










?>