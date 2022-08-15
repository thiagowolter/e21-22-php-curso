<title>EXCLUIR</title>
<nav>
    <h1>EXCLUIR CADASTRO</h1>
</nav>
<?php
require_once 'head.php';
require_once 'config.php';


// session_start();

if($_GET['apagar']){
    $apagar = $_GET['apagar'];
    echo 'Apagando chave: ' . $_GET['apagar'];
    $queryapagar = 'DELETE FROM CADASTRO WHERE CADASTRO_ID='. $apagar;

    $tmp = $cadastro->prepare($queryapagar);
    $tmp->execute();
  
    echo $b;
    echo 'Retornando para a página principal em ' . $tt .' segundos!';
    header("refresh: $tt; index.php"); 

}
?>