<title>ALTERAR</title>
<nav>
    <h1>ALTERAR CADASTRO</h1>
</nav>
<?php
require_once 'head.php';
require_once 'config.php';
session_start();
?>
<form action="" method="POST">
    <fieldset>
        <label>Nome:</label>
        <input type="text" name="nome" value="">
        <label>Idade:</label>
        <input type="number" name="idade" value="">
        <label>CEP:</label>
        <input type="text" name="cep" value="">
        <label>Saldo:</label>
        <input type="text" name="saldo" value="">
        <br><br>
        <button type="submit" name="altera" value="Alterar" class="alt">Alterar</button>
    </fieldset>
</form>

<?php
$id = $_GET['ID'];

if(isset($_POST['altera'])){
    $sql1 = "UPDATE CADASTRO SET CADASTRO_NOME = :CADASTRO_NOME, CADASTRO_IDADE = :CADASTRO_IDADE, CADASTRO_CEP = :CADASTRO_CEP, CADASTRO_SALDO = :CADASTRO_SALDO  WHERE CADASTRO_ID=:id";
    $tmp = $cadastro->prepare($sql1);

    $tmp->execute([
        ':CADASTRO_NOME' => $_POST['nome'],
        ':CADASTRO_IDADE'=> $_POST['idade'],
        ':CADASTRO_CEP'=> $_POST['cep'],
        ':CADASTRO_SALDO'=> $_POST['saldo'],
        ':id' =>$id
        ]);

        echo $b;
        echo 'Salvando Alterações, retornando em ' . $tt . ' segundos!';
        header("refresh: $tt; index.php");

}
// $query = "SELECT * FROM CADASTRO WHERE CADASTRO_ID =". $alterar ;

?>




