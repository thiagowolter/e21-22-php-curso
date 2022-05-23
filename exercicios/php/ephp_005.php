<!-- ephp_005.php  -->

<!-- 5. Crie uma variavel nome e atribua a mesma um nome digitado pelo usuario  -->

<html>
    <body>
        <form method="post">
            Nome: <input type="text" name="fname">
            <input type="submit">
        </form>
    </body>
    </html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['fname'];
    echo '<br>';
    echo 'Voce digitou o nome: ' . $nome;
}
?>
