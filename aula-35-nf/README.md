<!-- HEADER -->
<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# INTRODUÇÃO AO PHP - EXERCÍCIOS
<!-- /HEADER -->

<!-- BODY -->
<!-- INDEX -->
## ÍNDICE

### Mais funções e Manipulação inicial de arquivos

- Aula 35
- Aula 36
- Aula 37
- Aula 38
- Aula 39

<!-- MAIN -->
## CÓDIGOS

<!-- SECTION -->
### [Date](./date.php)

```php
echo date( 'H:i:s' );
```
<!-- /SECTION -->

<!-- SECTION -->
### [Index](./index.php)

```php
$notasCursoA = [
    7.4,
    5.2,
    9.3,
    4.7,
];

$notasCursoB = [
    5.4,
    7.5,
    8.3,
    2.1,
];

function mediaDeNotas( array $notas ): float
{
    // $total = 0;
    // foreach ( $notas as $nota ) {
    //     $total += $nota;
    // }

    return ( array_sum( $notas ) / count( $notas ) );
}

echo mediaDeNotas( $notasCursoA ) . PHP_EOL;
echo mediaDeNotas( $notasCursoB );
```
<!-- /SECTION -->

<!-- SECTION -->
### [Criptografia Argon](./senha-argon2.php)

```php
$senha = '123456789';
$senhaEncoded = password_hash( $senha, PASSWORD_ARGON2I );

echo $senhaEncoded;
```
<!-- /SECTION -->

<!-- SECTION -->
### [Criptografia Base64](./senha-base64.php)

```php
$senha = '123456789';
$senhaEncoded = base64_encode( $senha );

echo $senha;
echo "\n";
echo base64_decode( $senhaEncoded );
```
<!-- /SECTION -->

<!-- SECTION -->
### [Criptografia MD5](./senha-md5.php)

```php
$senha = '123456789';
$senhaEncoded = md5( $senha );

echo $senhaEncoded;
```
<!-- /SECTION -->

<!-- SECTION -->
### [Strings](./strings.php)

```php
$nome = 'joão';
$sobrenome = 'HOLANDA';
$nome2 = 'júlio cesar';

echo ucfirst( $nome );
echo "\n";
echo ucfirst( strtolower( $sobrenome ) );
echo "\n";
echo ucwords( $nome2 );
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