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
    if (!isset($_GET["bt_sub"])) {
      // primeira vez, então exibe formulário
    ?>
      <form  action="" method="get">
        <label for="nome">NOME COMPLETO:</label>
        <input type="text" name="ds_nome" id="nome">
        <br>
        <br>
        <input type="radio" name="cd_sexo" id="masc" value="M">
        <label for="masc">Masculino</label>
        <input type="radio" name="cd_sexo" id="fem" value="F">
        <label for="fem">Feminino</label>
        <input type="radio" name="cd_sexo" id="ndef" value="N">
        <label for="ndef">Não informar</label>
        <br>
        <br>
        <label for="dtnasc">DATA DE NASCIMENTO:</label>
        <input type="date" name="dt_nasc" id="dtnasc">
        <br>
        <br>
        <label for="email">E-MAIL:</label>
        <input type="text" name="ds_email" id="email">
        <br>
        <br>
        <label for="telefone">TELEFONE:</label>
        <input type="text" name="nr_telefone" id="telefone">
        <br>
        <br>
        <input type="submit" name="bt_sub" value="Inserir">
      </form>

    <?php
    } else {
      $ds_nome = $_GET["ds_nome"];
      $cd_sexo = $_GET["cd_sexo"];
      $dt_nasc = $_GET["dt_nasc"]; # ano - mes - dia
      $nr_telefone = $_GET["nr_telefone"];
      $ds_email = $_GET["ds_email"];
  
      try {
          $sql = "INSERT INTO `agenda`.`tb_pessoa` (`ds_nome`, `cd_sexo`, `dt_nasc`, `nr_telefone`, `ds_email`) VALUES (:ds_nome, :cd_sexo, :dt_nasc, :nr_telefone, :ds_email);";

          $res = $pdo -> prepare($sql);

          $res -> bindParam(":ds_nome", $ds_nome);
          $res -> bindParam(":cd_sexo", $cd_sexo);
          $res -> bindParam(":dt_nasc", $dt_nasc);
          $res -> bindParam(":nr_telefone", $nr_telefone);
          $res -> bindParam(":ds_email", $ds_email);
          $res -> execute();
        
          if ($res -> rowCount() > 0) {
            echo "<p>Pessoa inserida com sucesso!</p>"; 
          }
        } catch(PDOException $e) {
          echo "ERRO: ". $e -> getMessage();
        }
    }
    ?>

    <p>
      <a href="index.php">Voltar à Página Principal</a>
    </p>
</body>
</html>