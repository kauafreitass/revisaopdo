<?php
try {
$dsn = "mysql:host=localhost;dbname=revisao;charset=utf8mb4";
$usuario = "root";
$senha = "";
$opcoes = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $usuario, $senha, $opcoes);
} catch (PDOException $e) {
die("Erro na conexão: " . $e->getMessage());
}
?>
