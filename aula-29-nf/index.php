<?php

$url = $_SERVER['REQUEST_URI'];

include './views/menu.php';

include match( $url ) {
    '/inicio' => './views/home.php',
    '/login' => './views/login.php',
    '/cadastro' => './views/cadastro.php',
default=> './views/404.php'
};
