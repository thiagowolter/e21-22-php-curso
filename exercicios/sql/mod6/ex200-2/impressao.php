<?php

require_once 'config.php';
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
        // $cadastro = $_SESSION['cadastro'];
        $query = "SELECT * FROM CADASTRO";

        foreach ($cadastro->query($query) as $pessoa){
            echo '<tr>';
            echo '<td>' . $pessoa['CADASTRO_NOME'] . '</td>';
            echo '<td>' . $pessoa['CADASTRO_IDADE'] . '</td>';
            echo '<td>' . $pessoa['CADASTRO_CEP'] . '</td>';
            echo '<td>' . 'R$ '. $pessoa['CADASTRO_SALDO'] . '</td>';
            echo '<td>' . "<a href=apagar.php?apagar=".$pessoa['CADASTRO_ID'] .">". "<button>Excluir</button>" ."</a>" .'</td>';
            echo '<td>' . "<a href=alterar.php?ID=".$pessoa['CADASTRO_ID'] . ">". "<button>Alterar</button>" ."</a>" .'</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>