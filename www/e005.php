<!-- e004.php -->
<!-- 
    variaveis ficam armazenadas na RAM 
    nunca:
        - inicializar com numero
        - utilize espacos em branco
        - &¨%&¨$
    evite
        - nome da var maior que 15 caract.
        - maior que 225
    faça
        - nomes significativos
    detalhe
        - variaveis em PHP sao case sensitive
-->

<?php
    $nome = "Maria";
    $sobrenome = "da Silva";
    echo "$sobrenome, $nome <br>";
    echo "$SOBRENOME, $nome <br>";
    ECHO "$sobrenome, $Nome <br>";
?>