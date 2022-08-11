<title>ALTERAR</title>
<nav>
    <h1>ALTERAR CADASTRO</h1>
</nav>
<?php
require_once 'head.php';
require_once 'base.php';
session_start();

$alterar = $_SESSION['cadastro2'][$_GET['ID']];
?>
<form action="" method="POST">
    <fieldset>
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $alterar['nome']; ?>">
        <label>Idade:</label>
        <input type="number" name="idade" value="<?php echo $alterar['idade']; ?>">
        <label>CEP:</label>
        <input type="text" name="cep" value="<?php echo $alterar['cep']; ?>">
        <label>Saldo:</label>
        <input type="text" name="saldo" value="<?php echo $alterar['saldo']; ?>">
        <br><br>
        <button type="submit" name="altera" value="Alterar" class="alt">Alterar</button>
    </fieldset>
</form>

<?php
if (isset($_POST['altera'])) {
    $nome = $_POST['nome'] ;
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];
    $saldo = $_POST['saldo'];

    $_SESSION['cadastro2'][$_GET['ID']]['nome'] = $nome;
    $_SESSION['cadastro2'][$_GET['ID']]['idade'] = $idade;
    $_SESSION['cadastro2'][$_GET['ID']]['cep'] = $cep;
    $_SESSION['cadastro2'][$_GET['ID']]['saldo'] = $saldo;

    echo $b;
    echo 'Salvando Alterações, retornando em ' . $tt . ' segundos!';
    header("refresh: $tt; index.php");
}
?>