<?php
require_once 'C:\Turma2\xampp\htdocs\projeto1-revisaopdo\model\UsuarioModel.php';

class UsuarioController
{

   private $usuarioModel;
   public function __construct($pdo)
   {
      $this->usuarioModel = new UsuarioModel($pdo);
   }
   public function criarUsuario($nome, $descricao, $preco)
   {
      $this->usuarioModel->criarUsuario($nome, $descricao, $preco);
   }
   public function exibirListaUsuarios()
   {
      $usuarios = $this->usuarioModel->listarUsuarios();
      include 'C:\Turma2\xampp\htdocs\projeto1-revisaopdo\view\listar.php';
   }
}
