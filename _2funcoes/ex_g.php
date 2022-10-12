<?php 
// g) Que receba um vetor de números inteiros e devolva a soma dos valores contidos nesse vetor. Use apenas um laço de repetição e instrução if.

function somar($numeros) {
    
    $tam = count($numeros);
    $soma = 0;

    for ($i = 0; $i < $tam; $i++) {
        $soma += $numeros[$i];
    }

    echo $soma;
}

somar(array(5, 10, 2));
?>