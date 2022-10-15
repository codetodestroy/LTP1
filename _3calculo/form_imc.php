<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Cálculo de IMC</title>
    </head>
    <body>
        <h1>Cálculo de IMC</h1>
        <?php 
            if (!isset($_GET["peso"])) {
        ?>
        <form action="#" method="GET">
            <label for="peso">Peso:
                <input type="text" id="peso" name="peso">
            </label>
            <label for="altura">Altura:
                <input type="text" id="altura" name="altura">
            </label><br><br>
            <input type="submit" value="Calcular">
        </form> 
        <?php 
        } else {
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

            echo "<p>Quer voltar pra página inicial? <a href=\"index.html\">Clique aqui!</a></p>";
        } 
        ?>  
        
    </body>
</html>