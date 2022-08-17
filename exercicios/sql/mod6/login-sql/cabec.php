<nav>
    <?php
    session_start();
    if(!isset($_SESSION['logado'])){
    header('Location: index.php');
    }
    echo $_SESSION['logado'] .  ' está logado';
    ?>
    <button><a href="pag1.php">PAGINA 1</a></button>
    <button><a href="pag2.php">PAGINA 2</a></button>
    <form method='post'><button type='submit' name='restaurar'> LOGOFF </button><br>
<?php
function restaurar(){    
    session_destroy();           
    echo "Fazendo LOGOFF ...<br>";
    echo "Retornando em 2 segundos ..."; 
    header("refresh: 2; index.php");
}
if (isset($_POST['restaurar'])) {    
    restaurar(); 
}?>
</nav>




