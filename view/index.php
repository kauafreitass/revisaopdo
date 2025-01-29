<?php

require_once 'C:\Turma2\xampp\htdocs\projeto1-revisaopdo\config.php';

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Participantes</title>
</head>

<body>

    <main>
            <div class="athletes-section">
                <h2>Lista</h2>
                <div class="crud-btns">
                    <a href="cadastrar.php"><button>Cadastrar usuario</button></a>
                </div>
                <div class="card-container">
                    <?php
                    require_once 'C:\aluno2\xampp\htdocs\listadefixacao\controller\ParticipanteController.php';
                    $usuarioController = new UsuarioController($pdo);
                    $usuarioController->exibirListaUsuarios();
                    ?>
                </div>
            </div>
        </section>
    </main>



</body>

</html>