<?php
require_once 'config.php';

$db = $_SESSION['db'];

// if(isset($db)) echo "   varivavel setada";
// else echo 'nao setada';

$query = "SELECT * FROM CIDADES";

foreach ($db->query($query) as $cidades) {
    print "<br> Cidade: " . $cidades['CIDADES_NOME'] ."<br>";
}


$query = "SELECT * FROM PESSOAS";

foreach ($db->query($query) as $pessoas) {
    print "<br><b> Pessoa: </b>" . $pessoas['PESSOAS_NOME'] . " | <b> Idade: </b>" .  $pessoas['PESSOAS_IDADE'];
}

echo "<br>";

$query = "SELECT PESSOAS_NOME, CIDADES_NOME FROM PESSOAS, CIDADES WHERE PESSOAS_CIDADES_ID=CIDADES_ID";

foreach($db->query($query) as $pessoascidades){
    print "<b><br> Pessoa e Cidade: </b> " . $pessoascidades['PESSOAS_NOME'] . " | " . $pessoascidades['CIDADES_NOME'];
}

?>