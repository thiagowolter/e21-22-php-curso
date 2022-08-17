<?php
require_once 'head.php';

?>

<form action="" method="POST">
    <fieldset>
        <label>Nome:</label>
        <input type="text" name="nome" required placeholder="Nome" required>
        <label>Idade:</label>
        <input type="number" name="idade" required placeholder="00" required>
        <label>CEP:</label>
        <input type="text" name="cep" required placeholder="12345-678">
        <label>Saldo:</label>
        <input type="text" name="saldo" required placeholder="00,00">
        <br><br>
        <button type="submit" name="cadastrar" value="Cadastrar" class="cad">Cadastrar</button>
    </fieldset>
</form>

<?php
function InserirPessoa($CADASTRO_NOME, $CADASTRO_IDADE, $CADASTRO_CEP, $CADASTRO_SALDO){
    // print "entrou";
    $cadastro = $_SESSION['cadastro'];
    $sql = 'INSERT INTO CADASTRO (CADASTRO_NOME, CADASTRO_IDADE, CADASTRO_CEP, CADASTRO_SALDO)' .
             'VALUES(:CADASTRO_NOME,:CADASTRO_IDADE,:CADASTRO_CEP,:CADASTRO_SALDO)';

    $tmp = $cadastro->prepare($sql);
    $tmp->execute([
        ':CADASTRO_NOME' => $CADASTRO_NOME,
        ':CADASTRO_IDADE' => $CADASTRO_IDADE,
        ':CADASTRO_CEP' => $CADASTRO_CEP,
        ':CADASTRO_SALDO' => $CADASTRO_SALDO,

    ]);
}

if (isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $cep = $_POST['cep'];
        $saldo = $_POST['saldo'];
        InserirPessoa($nome,$idade,$cep,$saldo);
}

?>
