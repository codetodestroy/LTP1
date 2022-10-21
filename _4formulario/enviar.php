<?php
    $nome = $_POST['nome'];
    $genero = $_POST['sexo'];
    $dataNasc = $_POST['dataNascimento'];
    $tel = $_POST['telefone'];
    $email = $_POST['endemail'];

    echo "Nome: $nome <br>";
    echo "Gênero: $genero <br>";
    echo "Data de Nascimento: $dataNasc <br>";
    echo "Telefone: $tel <br>";
    echo "E-mail: $email";
?>