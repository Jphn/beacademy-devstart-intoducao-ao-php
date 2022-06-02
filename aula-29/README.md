<!-- HEADER -->
<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# INTRODUÇÃO AO PHP - EXERCÍCIOS
<!-- /HEADER -->

<!-- BODY -->
<!-- INDEX -->
## ÍNDICE

### Include e Funções

- Aula 29
- Aula 30
- Aula 31
- Aula 32

<!-- MAIN -->
## CÓDIGOS

<!-- SECTION -->
### [Exercício Routing Index](./exercicio-routing-01/index.php)

```php
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>DevStart - Jphn</title>
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
 <header>
  <?php

$url = $_SERVER['REQUEST_URI'];

include './views/menu.php';

?>
 </header>
 <main class="container mt-5">

  <?php

include './acoes.php';

include match( $url ) {
    '/' => homePage(),
    '/signin' => signUpPage(),
    '/signup' => signUpPage(),
    '/list' => listPage(),
default=> './views/404.php'
};

?>
 </main>
</body>

</html>
```
<!-- /SECTION -->

<!-- SECTION -->
### [Routing](./index.php)

```php
$url = $_SERVER['REQUEST_URI'];

include './views/menu.php';

include match( $url ) {
    '/inicio' => './views/home.php',
    '/login' => './views/login.php',
    '/cadastro' => './views/cadastro.php',
default=> './views/404.php'
};

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