<?php
// a) Escrever a tabuada de um número passado por parâmetro. Exemplo: se o parâmetro for 2

function tabuada($n) {
    
    for ($i = 0; $i <= 10; $i++) {
        echo $n . " x " . $i . " = " . $n * $i . "<br>";
    }
}

tabuada(2);
?>