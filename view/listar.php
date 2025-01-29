<?php

foreach ($usuarios as $usuario) {
    
    echo '<div class="card">';
    echo '<h4>Nome: ' . $usuario["nome_usuario"] . "</h4>";
    echo '<li>Descricao:' . $usuario["idade"] . "</li>";
    echo '<li>Preço: ' . $usuario['preco'] . "</li>";
        echo '</div>';
}
    