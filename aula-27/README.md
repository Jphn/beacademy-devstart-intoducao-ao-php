<!-- HEADER -->
<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# INTRODUÇÃO AO PHP - EXERCÍCIOS
<!-- /HEADER -->

<!-- BODY -->
<!-- INDEX -->
## ÍNDICE

### Server

- Aula 27
- Aula 28

<!-- MAIN -->
## CÓDIGOS

<!-- SECTION -->
### [GET](./get.php)

```php
if (isset($_GET['nome'])) {
    echo $_GET['nome'];
}

var_dump($_GET);
```
<!-- /SECTION -->

<!-- SECTION -->
### [Index](./index.php)

```php
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

```
<!-- /SECTION -->

<!-- SECTION -->
### [POST](./post.php)

```php
<form action="" method="post">
 <input type="text" name="nome">

 <button type="submit">Enviar</button>
</form>

<?php

if (isset($_POST['nome'])) {
    echo $_POST['nome'];
}

```
<!-- /SECTION -->

<!-- SECTION -->
### [Server](./server.php)

```php
var_dump($_SERVER);
```
<!-- /SECTION -->
<!-- /MAIN -->
<!-- /BODY -->

<!-- FOOTER -->
## AUTOR

[@Jphn](https://github.com/Jphn)

<a href="https://www.beacademy.com.br/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2019/11/Logo-Topo.png" width="300" align="left" /></a>
<a href="https://www.paylivre.com/" target="_blank"><img src="https://web.paylivre.com/static/media/logo-blue.c7100186.png" width="300" align="right" /></a>
<!-- /FOOTER -->