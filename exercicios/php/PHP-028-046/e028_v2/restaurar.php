
<form action="" method="POST">
    <button type="submit" name="restaura" value="restaurar" class="res">Restaurar</button>   
</form>

<?php
if (isset($_POST['restaura'])) {        
    $_SESSION['cadastro2'] = $cadastro2;
}
?>