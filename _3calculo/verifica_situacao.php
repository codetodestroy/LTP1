<?php 
    $aluno = $_GET["aluno"];
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];

    $media = ($nota1 + $nota2) / 2;

    echo "<b>Aluno:</b> $aluno. <br><b>Média final:</b> $media <br>";

    if ($media < 4) {
        echo "Situação: <span style='color: red'>REPROVADO.</span>";
    } elseif (($media >= 4) & ($media < 6)) {
        echo "Situação: <span style='color: orange'>EXAME FINAL.</span>";
    } else {
        echo "Situação: <span style='color: green'>APROVADO</span>";
    }
?>