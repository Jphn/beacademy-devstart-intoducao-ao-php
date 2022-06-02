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