<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>
    </head>
    <body>
        <?php
        if(isset($_POST['bt-enviar'])) {
            
            $erros = array();

            $nome = $_POST['nome'];
            $sexo = $_POST['sexo'];
            $dataNasc = $_POST['dataNascimento'];
            $tel = $_POST['telefone'];
            $email = $_POST['endemail'];

            if(!$email == filter_input(INPUT_POST, 'endemail', FILTER_VALIDATE_EMAIL)) {
                $erros[] = "E-mail não está válido!";
            }

            if(!empty($erros)) {
                foreach ($erros as $erro) {
                    echo $erro;
                }
            } 

        } else {
        ?>
        <h1>Formulário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="nome">Nome:
                <input type="text" name="nome" id="nome" required>
            </label><br><br>
                Gênero:
                <input type="radio" name="sexo" id="masc" required>Masculino
                <input type="radio" name="sexo" id="fem">Feminino<br><br>
            <label for="dataNascimento">Data de nascimento: 
                <input type="date" name="dataNascimento" id="dataNascimento" required>
            </label><br><br>
            <label for="telefone">Telefone: 
                <input type="tel" name="telefone" id="telefone" placeholder="(00) 00000-0000" required>
            </label><br><br>
            <label for="endemail">E-mail: 
                <input type="email" name="endemail" id="endemail" placeholder="seuemail@dominio.com" required>
            </label><br><br>
            <input type="submit" value="Enviar" name="bt-enviar">
        </form>
        <?php
        }
        ?>
    </body>
</html>