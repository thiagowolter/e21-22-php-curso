<?php
require_once 'head.php';
require_once 'base.php';
?>

<form action="" method="POST">
    <fieldset>
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Nome">
        <label>Idade:</label>
        <input type="number" name="idade" placeholder="00">
        <label>CEP:</label>
        <input type="text" name="cep" placeholder="12345-678">
        <label>Saldo:</label>
        <input type="text" name="saldo" placeholder="00,00">
        <br><br>
        <button type="submit" name="cadastrar" value="Cadastrar" class="cad">Cadastrar</button>
    </fieldset>
</form>

