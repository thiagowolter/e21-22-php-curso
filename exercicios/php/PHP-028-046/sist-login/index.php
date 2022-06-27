<?php
require_once 'config.php';
require_once 'cabec.php';
?>

<form action="" method="POST">
    User: <input type="text" name="user" placeholder="digite o usuario">
    Senha: <input type="password" name="senha" placeholder="digite a senha">
    <input type="submit" value="LOGIN" name="login">
</form>

<?php
if (isset($_POST['login'])) {
    if ($_POST['user'] == $user && $_POST['senha'] == $senha) {
        session_start();
        echo "Acesso liberado: <a href='pag1.php'><button>Entrar</button></a>";
    } else {
        echo 'Usuário ou senha incorretos, tente novamente!';
    }
}
?>