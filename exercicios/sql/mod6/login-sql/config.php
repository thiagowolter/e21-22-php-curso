<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
session_start();
// $users = array( 1 => array(
//     "user" => 'admin',
//     "pass" => '1234',)
// );

session_start();
try
{
    $login = new PDO('sqlite:login-sql.sqlite');
    // print('Conectou');
}
catch(PDOException $e)
{
    // print "<br> Nao conectou, algo deu errado, verifique:" . $e ;
}

$_SESSION['login'] = $login;

?>

