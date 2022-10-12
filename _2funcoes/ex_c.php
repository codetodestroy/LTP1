<?php
// c) Que receba um vetor com números inteiros e que devolva o maior número existente no vetor.  Use apenas um laço de repetição e instrução if.

function numeroMaior($numeros) {

    $maior = 0;

    foreach($numeros as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }
    }

    echo "O maior número do vetor é " . $maior;
}

numeroMaior(array(5, 15, 8, 11));
?>