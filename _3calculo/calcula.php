<?php
    $peso = $_GET["peso"];
    $altura = $_GET["altura"];

    $peso_fmt = str_replace(",", ".", $peso);
    $altura_fmt = str_replace(",", ".", $altura);

    $imc = $peso_fmt / (pow($altura_fmt, 2));
    $imc = number_format($imc, 2);

    echo "Seu IMC: <span style='color: green'>$imc</span><br>";

    if ($imc < 17) {
        echo "<b>Situação:</b> Muito abaixo do peso.";
    } elseif (($imc >= 17) && ($imc <= 18.49)) {
        echo "<b>Situação:</b> Abaixo do peso.";
    } elseif (($imc >= 18.50) && ($imc <= 24.99)) {
        echo "<b>Situação:</b> Peso normal.";
    } elseif (($imc >= 25) && ($imc <= 29.99)) {
        echo "<b>Situação:</b> Acima do peso.";
    } elseif (($imc >= 30) && ($imc <= 34.99)) {
        echo "<b>Situação:</b> Obesidade I.";
    } elseif (($imc >= 35) && ($imc <= 39.99)) {
        echo "<b>Situação:</b> Obesidade II (Severa).";
    } else {
        echo "<b>Situação:</b> Obesidade III (Mórbida).";
    }
?>