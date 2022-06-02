<!-- HEADER -->
<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# INTRODUÇÃO AO PHP - EXERCÍCIOS
<!-- /HEADER -->

<!-- BODY -->
<!-- INDEX -->
## ÍNDICE

### Estruturas de repetição

- Aula 16
- Aula 17
- Aula 18

<!-- MAIN -->
## CÓDIGOS

<!-- SECTION -->
### [DO WHILE](./do-while.php)

```php
$a = 1;

do {
 echo "Olá o pente!\n";

 $a++;
} while ($a <= 10);

```
<!-- /SECTION -->

<!-- SECTION -->
### [Exercício Ano - WHILE](./execicio-while.php)

```php
<select>
 <option selected disabled>Selecione o ano</option>
 <?php
 $ano = 1900;

 while ($ano <= 2022) {
  echo "<option value='{$ano}'>{$ano}</option>";

  $ano++;
 }
 ?>
</select>
```
<!-- /SECTION -->

<!-- SECTION -->
### [Exercício Música - FOR](./exercicio-for-01.php)

```php
// DOWN DOWN DOWN
for ($i=1; $i <= 10; $i++) { 
 echo "DOWN\n";
}
```
<!-- /SECTION -->

<!-- SECTION -->
### [Exercício Seletores - FOR](./exercicio-for-02.php)

```php
<select>
 <option selected disabled>Selecione o ano</option>
 <?php
for ( $i = 1900; $i <= 2022; $i++ ) {
    echo "<option value='{$i}'>{$i}</option>";
}
?>
</select>

<select>
 <option selected disabled>Selecione um dia</option>
 <?php
for ( $i = 1; $i <= 31; $i++ ) {
    echo "<option value='{$i}'>{$i}</option>";
}
?>
</select>

<select>
 <option selected disabled>Selecione um mês</option>
 <?php
for ( $i = 1; $i <= 12; $i++ ) {
    echo "<option value='{$i}'>", match( $i ) {
        1 => 'Janeiro',
        2 => 'Fevereiro',
        3 => 'Março',
        4 => 'Abril',
        5 => 'Maio',
        6 => 'Junho',
        7 => 'Julho',
        8 => 'Agosto',
        9 => 'Setembro',
        10 => 'Outubro',
        11 => 'Novembro',
        12 => 'Dezembro',
    }, '</option>';
}
?>
</select>
```
<!-- /SECTION -->

<!-- SECTION -->
### [FOR](./for.php)

```php
<select>
 <option selected disabled>Selecione o ano</option>
 <?php
for ( $i = 1900; $i <= 2022; $i++ ) {
    echo "<option value='{$i}'>{$i}</option>";
}
?>
</select>
```
<!-- /SECTION -->

<!-- SECTION -->
### [WHILE](./while.php)

```php
$n = 1;

while ($n <= 10) {
 echo "Nº {$n}";

 $n++;
}
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