<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style2.css">
    <link rel="stylesheet" href="../../select.scss">
    <title>Cadastrar</title>
</head>

<body>
    <section class="crud-section">
        <a href="index.php"><button>Voltar para o início</button></a>
        <div class="card-container">
            <h1>Cadastrar</h1>
            <form method="POST">
                <input type="text" name="nome" placeholder="Nome">
                <input type="text" name="descricao" placeholder="Descrição">
                <input type="preco" name="preco" placeholder="Preço">

                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
</body>

</html>

<?php
require_once 'C:\Turma2\xampp\htdocs\projeto1-revisaopdo\config.php';
require_once 'C:\Turma2\xampp\htdocs\projeto1-revisaopdo\controller\UsuarioController.php';
if (isset($_POST["nome_usuario"]) && isset($_POST["idade"]) && isset($_POST['acompanhado']) && isset($_POST['data']) && isset($_POST['horario'])) {
    $usuarioController = new UsuarioController($pdo);
    $idade = $_POST['idade'];
    $acompanhado = $_POST['acompanhado'];
    // $autorizado = autorizar($idade, $acompanhado);

    function autorizar($idade, $acompanhado)
    {
        if ($idade < 16) {
            return false;
        } elseif ($idade >= 16 && $idade < 18 && $acompanhado === "Não") {
            return false;
        } elseif ($idade >= 16 && $idade < 18 && $acompanhado === "Sim") {
            return true;
        } elseif ($idade >= 18) {
            return true;
        };
    }



    $participanteController->criarUsuario($_POST["nome_usuario"], $_POST["idade"], $_POST['acompanhado'], $_POST['data'], $_POST['horario'], autorizar($idade, $acompanhado));
    header("Location:../../view/paricipantes/index.php");
}
?>