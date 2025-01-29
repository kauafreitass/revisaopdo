<?php

class UsuarioModel
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function criarUsuario($nome_usuario, $idade, $acompanhado, $data, $horario, $autorizado)
    {
        $sql = "INSERT INTO ex1_participacao_eventos(nome_usuario, idade, acompanhado, data, hora, participacao_autorizada) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_usuario, $idade, $acompanhado, $data, $horario, $autorizado]);
    }
    public function listarUsuarios()
    {
        $sql = "SELECT * FROM ex1_participacao_eventos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }
}