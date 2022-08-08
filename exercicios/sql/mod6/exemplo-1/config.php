<?php
// session_start();
try
{
    $db = new PDO('sqlite:modulo6.sqlite');
    // print('Conectou');
}
catch(PDOException $e)
{
    print "<br> Nao conectou, algo deu errado, verifique:" . $e ;
}

$_SESSION['db'] = $db;
?>