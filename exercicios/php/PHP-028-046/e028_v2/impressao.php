<?php
require_once 'base.php';
require_once 'formcad.php';
require_once 'cadastrar.php';
?>

<table>
    <thead>
        <tr id="people">
            <th>Nome</th>
            <th>Idade</th>
            <th>CEP</th>
            <th>Saldo</th>
            <th>Excluir</th>
            <th>Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($_SESSION['cadastro2'] as $id => $pessoa) {
            echo '<tr>';
            echo '<td>' . $pessoa['nome'] . '</td>';
            echo '<td>' . $pessoa['idade'] . '</td>';
            echo '<td>' . $pessoa['cep'] . '</td>';
            echo '<td>' . 'R$ '. $pessoa['saldo'] . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>