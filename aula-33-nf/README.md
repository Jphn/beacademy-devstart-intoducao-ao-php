<!-- HEADER -->
<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# INTRODUÇÃO AO PHP - EXERCÍCIOS
<!-- /HEADER -->

<!-- BODY -->
<!-- INDEX -->
## ÍNDICE

### Retorno de funções e Tipos de dados

- Aula 33
- Aula 34

<!-- MAIN -->
## CÓDIGOS

<!-- SECTION -->
### [Funções Array](./funcao-array.php)

```php
function mostrarNome( array $nomes ): void
{
    foreach ( $nomes as $nome ) {
        echo "Nome: {$nome}";
    }
}
```
<!-- /SECTION -->

<!-- SECTION -->
### [Funções](./funcoes.php)

```php
function outraSoma( int $n1, int $n2 ): int
{
    return $n1 + $n2;
}

echo outraSoma( 1, 2 );
echo outraSoma( 30, 50 );
echo outraSoma( 'João', 'Pedro' );
```
<!-- /SECTION -->

<!-- SECTION -->
### [Tipos](./tipos.php)

```php
function welcomeTipado( string $nome ): string
{
    return "Olá {$nome}, seja bem-vindo!";
}

echo welcomeTipado( 'João' );
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