<!-- aula_001.9.1c.php -->

<?php
$salario = 1010;
$tempo_servico = 12;
$tem_reclamacoes = false;
if ($salario > 1000) {
    if ($tempo_servico >= 12) {
        if ($tem_reclamacoes != True) {
            echo "parabens voce foi promovido";
        }
    }
}

if (($salario > 1000) and ($tempo_servico >=12) and ($tem_reclamacoes != True)){
    echo "parabens você foi provomido";
}
?>
