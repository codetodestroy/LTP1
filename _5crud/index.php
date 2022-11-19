<?php
include "inc/conectabd.php"
?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDA</title>
</head>
<body>
    <h1>AGENDA</h1>
    <?php
    $sql = "SELECT id_pessoa, ds_nome, ds_email from tb_pessoa";

    $statement = $pdo -> prepare($sql);
    $statement -> execute();
    $linhas = $statement -> fetchAll(PDO::FETCH_ASSOC);

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>NOME</th><th>E-MAIL</th><th colspan='2'>AÇÕES</th></tr>";
    foreach($linhas as $pessoa){
        echo "<tr>".
            "<td>".$pessoa["id_pessoa"]."</td>".
            "<td>".$pessoa["ds_nome"]."</td>".
            "<td>".$pessoa["ds_email"]."</td>".
            "<td><a href=".'"excluirPessoa.php?id='.$pessoa["id_pessoa"].'">EXCLUIR</a></td>'.
            "<td><a href=".'"alterarPessoa.php?id='.$pessoa["id_pessoa"].'">ALTERAR</a></td>';
            "</tr>";
    }
    echo '</table>';
    ?>
    <p>
        <a href="inserirPessoa.php">INCLUIR NOVA PESSOA</a>
    </p>
</body>
</html>