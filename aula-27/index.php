<?php

$url = $_SERVER['REQUEST_URI'];

if ($url === '/') {
    echo '<h1>Páginda principal</h1>';
} elseif ($url === '/login') {
    echo '<h1>Página de login</h1>';
} else {
    echo '<h1>404 - Página não encontrada</h1>';
}

// MATCH

echo '<h1>';
echo match($url) {
    '/' => 'Página Inicial',
    '/login' => 'Página de Login',
    '/cadastro' => 'Página de Cadastro',
default=> '404 - Não Encontrado'
};
echo '</h1>';
