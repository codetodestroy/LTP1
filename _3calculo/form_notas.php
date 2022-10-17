<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Cálculo de Média e Situação de Aluno</title>
    </head>
    <body>
        <h1>Cálculo de Média e Situação de Aluno</h1>
        <?php
            if (!isset($_GET["aluno"])) {
        ?>
        <form action="#" method="GET">
            <label for="aluno">Nome do aluno:
                <input type="text" id="aluno" name="aluno" required>
            </label><br><br>
            <label for="nota1">Nota 1:
                <input type="text" id="nota1" name="nota1" required>
            </label>
            <label for="nota2">Nota 2: 
                <input type="text" id="nota2" name="nota2" required>
            </label><br><br>
            <input type="submit" value="Verificar Situação">
        </form>
        <?php
            } else {
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

                echo "<p>Quer voltar pra página inicial? <a href=\"index.html\">Clique aqui!</a></p>";
            }
            ?>
    </body>
</html>