<?php
// e) Sabendo que a fórmula para a conversão de uma temperatura em Fahrenheit para Celsius é: c = (f-32)/18, 
// faça uma função em PHP que mostre os valores em Celsius das seguintes temperaturas em Fahrenheit: 90º, 77º, 52º e 12º (PHP na prática, Júlia Marques Carvalho da  Silva, Campus)

function converterTemperatura($fahrenheit) {
    $celsius = ($fahrenheit - 32) / 18;
    echo "<span>" . $celsius . "</span><br>";
}

converterTemperatura(90);
converterTemperatura(77);
converterTemperatura(52);
converterTemperatura(12);
?>