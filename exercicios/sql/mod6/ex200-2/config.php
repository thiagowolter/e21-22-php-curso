<?php
$b = '<br>';
$tt = 3;
error_reporting(E_ALL ^ E_WARNING); 
?>

<?php
// session_start();
try
{
    $cadastro = new PDO('sqlite:ex200mod6.sqlite');
    // print('Conectou');
}
catch(PDOException $e)
{
    // print "<br> Nao conectou, algo deu errado, verifique:" . $e ;
}

$_SESSION['cadastro'] = $cadastro;