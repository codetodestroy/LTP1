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

            if(strlen($nome) <= 2) {
                $erros[] = "O nome é inválido!";
                header("refresh: 3");
            } 

            if(!is_numeric($tel)) {
                $erros[] = "O telefone é inválido!";
            }

            if(!$email == filter_input(INPUT_POST, 'endemail', FILTER_VALIDATE_EMAIL)) {
                $erros[] = "O e-mail é inválido!";
            }

            if(!empty($erros)) {
                foreach ($erros as $erro) {
                    echo $erro;
                    break;
                }
            } 

            $pessoa["nome"] = $nome;
            $pessoa["sexo"] = $sexo;
            $pessoa["dataNasc"] = $dataNasc;
            $pessoa["tel"] = $tel;
            $pessoa["email"] = $email;

            $linha = json_encode($pessoa);
            $arquivo = fopen('dados.txt' , "a");
            $bits = fwrite($arquivo, $linha.PHP_EOL);
            $arquivo = fclose($arquivo);

            $file = fopen("dados.txt","r");

            echo "<table id='tabela'>";
            echo "<th>Nome</th><th>Gênero</th><th>Data de Nascimento</th><th>Telefone</th><th>E-mail</th>";
            while(!feof($file)) 
            {
                $line = fgets($file);
                
                $pessoa = json_decode($line, true);
            
                if(isset($pessoa["nome"]) || isset($pessoa["sexo"]) || isset($pessoa["dataNasc"]) || isset($pessoa["tel"]) || isset($pessoa["email"])) {
                    echo "<tr>";
                    echo "<td>";
                    echo $pessoa["nome"];
                    echo "</td>";
                    echo "<td>";
                    echo $pessoa["sexo"];
                    echo "</td>";
                    echo "<td>";
                    echo $pessoa["dataNasc"];
                    echo "</td>";
                    echo "<td>";
                    echo $pessoa["tel"];
                    echo "</td>";
                    echo "<td>";
                    echo $pessoa["email"];
                    echo "</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
            fclose($file);
        } else {
        ?>
        <h1>Formulário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="nome">Nome:
                <input type="text" name="nome" id="nome" required>
            </label><br><br>
                Gênero:
                <input type="radio" name="sexo" value="Masculino" checked>Masculino
                <input type="radio" name="sexo" value="Feminino" >Feminino<br><br>
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