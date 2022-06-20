
<form action="" method="POST">
    <input type="submit" name="restaura" value="RESTAURAR">
</form>

<?php
if (isset($_POST['restaura'])) {        
    $_SESSION['cadastro2'] = $cadastro2;
}
?>