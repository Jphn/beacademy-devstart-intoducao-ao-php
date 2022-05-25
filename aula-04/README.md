<!-- HEADER -->
<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# INTRODUÇÃO AO PHP - EXERCÍCIOS
<!-- /HEADER -->

<!-- BODY -->

<!-- INDEX -->
## Apresentação do PHP

- Aula 04
- Aula 05
<!-- /INDEX -->

<!-- MAIN -->

## CÓDIGOS

<!-- SECTION -->
### [Nome e cidade](./index.php)

```html
<form action="" method="post">
 <input type="text" name="nome" placeholder="Digite seu nome" required><br>
 <input type="text" name="cidade" placeholder="Digite sua cidade" required><br>
 <button type="submit">Enviar</button>
</form>
```

```php
if (isset($_POST['nome']) && isset($_POST['cidade'])) {
 echo "Oi {$_POST['nome']} de {$_POST['cidade']}.";
}
```
<!-- /SECTION -->

<!-- SECTION -->
### [Calculadora](./calculadora.php)

```html
<form action="" method="post">
 <input type="number" name="n1" placeholder="Digite um número" required><br>
 <select name="op" required>
  <option selected disabled>Selecione uma operação</option>
  <option value="+">Somar</option>
  <option value="-">Subtrair</option>
  <option value="*">Multiplicar</option>
  <option value="/">Dividir</option>
 </select><br>
 <input type="number" name="n2" placeholder="Digite um número" required><br>
 <button type="submit">Ver o resultado</button>
</form>
```

```php
if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['op'])) {
 $n1 = $_POST['n1'];
 $n2 = $_POST['n2'];

 switch ($_POST['op']) {
  case '+':
   $result = $n1 + $n2;
   break;

  case '-':
   $result = $n1 - $n2;
   break;

  case '*':
   $result = $n1 * $n2;
   break;

  case '/':
   $result = $n1 / $n2;
   break;

  default:
   echo "Ocorreu um erro.";
   break;
 }

 echo "{$_POST['n1']} {$_POST['op']} {$_POST['n2']} = {$result}";
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