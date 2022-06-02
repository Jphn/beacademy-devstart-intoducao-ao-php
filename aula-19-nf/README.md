<!-- HEADER -->
<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# INTRODUÇÃO AO PHP - EXERCÍCIOS
<!-- /HEADER -->

<!-- BODY -->
<!-- INDEX -->
## ÍNDICE

### Arrays

- Aula 19
- Aula 20
- Aula 21
- Aula 22
- Aula 23

<!-- MAIN -->
## CÓDIGOS

<!-- SECTION -->
### [Arrays](./arrays.php)

```php
$aluno1 = "João";
$aluno2 = "Pedro";
$aluno3 = "Júlio";

$alunos1 = array(
    "João",
    "Pedro",
    "Júlio",
);

$alunos2 = [
    "João",
    "Pedro",
    "Júlio",
];

echo $alunos2[1];
```

<!-- SECTION -->
### [Bandas](./bandas.php)

```php
$bandas = [
    'AC/DC',
    'Turma do Pagode',
    'Tell a Tale',
    'Black Sabbath',
];

echo '<ul>';

foreach ($bandas as $banda) {
    echo "<li>{$banda}</li>";
}

echo '<ul>';
```

<!-- SECTION -->
### [Exercício Frutas](./exercicio-arrays-01.php)

```php
$frutas = [
    'Laranja',
    'Maça',
    'Abacaxi',
];

$frutas[] = 'Maça';

$frutas[10] = 'Melancia';

$frutas[] = 'Morango';

echo '<ul>';

for ($i = 0; $i <= array_key_last($frutas); $i++) {
    if (isset($frutas[$i])) {
        echo "<li>{$frutas[$i]}</li>";
    }
}

// FOREACH

foreach ($frutas as $fruta) {
    echo "<li>{$frutas}</li>";
}

echo '</ul>';
```

<!-- SECTION -->
### [Exercício Bandas](./exercicio-arrays-02.php)

```php
$bandas = [
    ['AC/DC', 1973],
    ['Twenty One Pilots', 2009],
    ['Turma do Pagode', 1994],
    ['Sorriso Maroto', 1997],
];

echo '<ul>';

foreach ($bandas as $banda) {
    echo "<li>{$banda[0]} ({$banda[1]})</li>";
}

echo '</ul>';
```

<!-- SECTION -->
### [Frutas](./frutas.php)

```php
$frutas = [
 "Laranja",
 "Maça",
 "Abacaxi"
];

$frutas[] = "Maça";

$frutas[10] = "Melancia";

$frutas[] = "Morango";

var_dump($frutas);
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