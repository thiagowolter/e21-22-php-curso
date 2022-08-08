<?php
require_once 'config.php';
// $db = $_SESSION['db'];

function InserirPessoa($PESSOAS_NOME, $PESSOAS_IDADE, $PESSOAS_CIDADES_ID){
    print "entrou";
    $db = $_SESSION['db'];
    $sql = 'INSERT INTO PESSOAS (PESSOAS_NOME, PESSOAS_IDADE, PESSOAS_CIDADES_ID)' .
             'VALUES(:PESSOAS_NOME,:PESSOAS_IDADE,:PESSOAS_CIDADES_ID)';

    $tmp = $db->prepare($sql);
    $tmp->execute([
        ':PESSOAS_NOME' => $PESSOAS_NOME,
        ':PESSOAS_IDADE' => $PESSOAS_IDADE,
        ':PESSOAS_CIDADES_ID' => $PESSOAS_CIDADES_ID
    ]);

    return $db->lastInsertId();
}

$novoID = InserirPessoa('Cristiano',55,1);
print '<br> '. $novoID . '<br>';
unset($db);
unset($_SESSION['db']);

?>