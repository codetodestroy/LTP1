<?php
// b) Inverter o conteúdo de um vetor qualquer. Exemplo: se a entrada for ['a', 'z,'m'] deve devolver ['m','z','a'].

function inverter($valores) {

    foreach ($valores as $valor) {
        echo $valor . "\n";
    }

    echo "<br>";

    $inverter = array_reverse($valores);

    foreach ($inverter as $valor) {
        echo $valor . "\n";
    }
}

inverter(array("a", "z", "m"));
?>