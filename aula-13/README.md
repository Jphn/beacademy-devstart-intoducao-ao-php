<!-- HEADER -->
<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# INTRODUÇÃO AO PHP - EXERCÍCIOS
<!-- /HEADER -->

<!-- BODY -->
<!-- INDEX -->
## INDÍCE

### Estruturas condicionais

- Aula 13
- Aula 14
- Aula 15

<!-- MAIN -->
## CÓDIGOS

<!-- SECTION -->
### [If](./se.php)

```php
$n = 10;

if ($n > 0) echo "Positivo"; // Output: Positivo
```
<!-- /SECTION -->

<!-- SECTION -->
### [If Else](./se-senao.php)

```php
$n = 10;

if ($n > 0) {
 echo "Positivo";
} else {
 echo "Negativo";
}; // Output: Positivo

```
<!-- /SECTION -->

<!-- SECTION -->
### [If Else If](./se-senao-se.php)

```php
$n = 10;

if ($n > 0) {
 echo "Positivo";
} else if ($n < 0) {
 echo "Negativo";
} else {
 echo "Zero";
}; // Output: Positivo
```
<!-- /SECTION -->

<!-- SECTION -->
### [Exercício If](./exercicio-se.php)

```php
$n = 10;

echo $n > 0 ? "Positivo" : ($n < 0 ? "Negativo" : "Zero"); // Output: Positivo

// Ou

if ($n > 0) {
 echo "Positivo";
} else if ($n < 0) {
 echo "Negativo";
} else {
 echo "Zero";
} // Output: Positivo
```
<!-- /SECTION -->

<!-- SECTION -->
### [Switch](./switch.php)

```php
$mes = 9;

switch ($mes) {
 case 1:
  echo "Janeiro";
  break;

 case 2:
  echo "Fevereiro";
  break;

 case 3:
  echo "Março";
  break;

 case 4:
  echo "Abril";
  break;

 case 5:
  echo "Maio";
  break;

 case 6:
  echo "Junho";
  break;

 case 7:
  echo "Julho";
  break;

 case 8:
  echo "Agosto";
  break;

 case 9:
  echo "Setembro";
  break;

 case 10:
  echo "Outubro";
  break;

 case 11:
  echo "Novembro";
  break;

 case 12:
  echo "Dezembro";
  break;

 default:
  echo "Não é um mês";
  break;
} // Output: Setembro
```
<!-- /SECTION -->

<!-- SECTION -->
### [Match](./match.php)

```php
$mes = 9;

echo match ($mes) {
 1 => "Janeiro",
 2 => "Fevereiro",
 3 => "Março",
 4 => "Abril",
 5 => "Maio",
 6 => "Junho",
 7 => "Julho",
 8 => "Agosto",
 9 => "Setembro",
 10 => "Outubro",
 11 => "Novembro",
 12 => "Dezembro",
 default => "Mês inválido"
}; // Output: Setembro
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