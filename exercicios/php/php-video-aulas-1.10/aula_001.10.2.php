<!-- aula_001.10.2.php -->

# Require ..

require <arquivo>
<?php

// echo quadrado(10);

// include 'tools.php'; # gera warning se não encontrar o arquivo
require 'tools.php'; # gera um erro fatal e interrompe. 
echo "<BR> Quadrado de 4 é:" . quadrado(4);

?>    

## a unica diferença para o include é que o erro é fatal e não warning!!!