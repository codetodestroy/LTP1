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
    <h1>EXCLUSÃO</h1>
    <?php
    if (!isset($_GET["id"])) {
      // primeira vez, então exibe formulário
        echo '<p>É necessário informar o identificador para exclusão</p>';
    } else {
      $id_pessoa = $_GET["id"];

      try {
          $sql = "DELETE FROM `agenda`.`tb_pessoa` WHERE id_pessoa=:id_pessoa;";
          $res = $pdo -> prepare($sql);
          $res -> bindParam(':id_pessoa', $id_pessoa);

          $res -> execute();
        
          if ($res -> rowCount() > 0) {
            echo "<p>Registro excluído com sucesso!</p>"; 
          }
        } catch(PDOException $e) {
          echo "ERRO: " . $e -> getMessage();
        }
    }
    ?>
    <p><a href="index.php">Voltar à Página Principal</a></p>
</body>
</html>