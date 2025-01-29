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
$conexao = new PDO($dsn, $usuario, $senha, $opcoes);
echo "Conexão estabelecida com sucesso!";
} catch (PDOException $e) {
die("Erro na conexão: " . $e->getMessage());
}
?>
