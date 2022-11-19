<?php
// Db ou schema
$dbname = "agenda";
// Endereço do servidor do bd
$host = "localhost";
// Usuário e senha
$username = "aplicacao_agenda";
$password = "agenda123";

$cbd = "mysql:host=$host;dbname=$dbname;charset=UTF8";

try {
	$pdo = new PDO($cbd, $username, $password);

	if ($pdo) {
	// echo "Conectou com o schema $dbname com sucesso!";
	}
} catch (PDOException $e) {
	echo "Erro com o banco de dados: " . $e -> getMessage();
} catch (Exception $e) {
	echo "Erro genérico: " . $e -> getMessage();
}
?>