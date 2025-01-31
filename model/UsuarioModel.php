<?php

class UsuarioModel
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function criarUsuario($nome, $descricao, $preco)
    {
        $sql = "INSERT INTO produtos(nome, descricao, preco) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $descricao, $preco]);
    }
    public function listarUsuarios()
    {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }
}