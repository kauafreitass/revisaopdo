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

    <main>
        <div class="athletes-section">
            <h2>Lista</h2>
            <div class="card-container">
                <?php
                require_once 'C:\Turma2\xampp\htdocs\projeto1-revisaopdo\config.php';
                require_once 'C:\Turma2\xampp\htdocs\projeto1-revisaopdo\controller\UsuarioController.php';
                $usuarioController = new UsuarioController($pdo);
                $usuarioController->exibirListaUsuarios();
                ?>
            </div>
        </div>
        </section>
    </main>
</body>

</html>

<?php
require_once 'C:\Turma2\xampp\htdocs\projeto1-revisaopdo\controller\UsuarioController.php';
if (isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST['preco'])) {
    $usuarioController = new UsuarioController($pdo);



    $usuarioController->criarUsuario($_POST["nome"], $_POST["descricao"], $_POST['preco']);
    header("Location:../../view/paricipantes/index.php");
}
?>