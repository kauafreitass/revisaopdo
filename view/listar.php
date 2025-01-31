<?php

foreach ($usuarios as $usuario) {
    
    echo '<div class="card">';
    echo '<li>Nome: ' . $usuario["nome"] . "</li>";
    echo '<li>Descricao:' . $usuario["descricao"] . "</li>";
    echo '<li>Preço: ' . $usuario['preco'] . "</li>";
        echo '</div>';
}
    