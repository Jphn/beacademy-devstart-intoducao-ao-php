<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# Introdução ao PHP - Exercícios

## Incremento/decremento, concatenação e operadores relacionais

- Aula 09
- Aula 10
- Aula 11
- Aula 12

### **Incremento/Decremento**

```php
$salarioA = 1100;
$salarioB = 1500;

$salarioA = $salarioA + 200;
$salarioB = $salarioB + 200;

$salarioA += 200;
$salarioB += 200;

$salarioA -= 200;

$n = 10;

// Iguais
$n = $n + 1;
$n += 1;
$n++;
```

### **Concatenação**

```php
$nome = "João Pedro";
$sobrenome = "Holanda Neves";
$idade = 230;
$cidade = "Iguatu";

$outroNome = "Nome";
$outroNome .= "Sobrenome";

echo $nome . " " . $sobrenome;

echo "Eu me chamo ", $nome, ", tenho ", $idade, " anos e moro em ", $cidade, ".";

echo "Eu me chamo {$nome}, tenho {$idade} anos e moro em {$cidade}.";
echo 'Eu me chamo {$nome}, tenho {$idade} anos e moro em {$cidade}.';
```

### **Operadores Lógicos**

```php
$numero = 10;

/* 
== Igualdade
=== Identicidade
< Menor que
> Maior que
<= Menor ou igual a
>= Maior ou igual a 

! Negação
!= Diferente de
!== Não idêntico a
*/

echo $numero > 10;
```

### **Ternário**

```php
$idade = 19;

echo ($idade >= 18 ? "Maior" : "Menor") . " de idade.";

echo isset($nome) ? $nome : "Nome não definido";

echo $nome ?? "Nome não definido";
```

### **Tabela com dados do PHP**

```php
$nome1 = "Alfreds Futterkiste";
$idade1 = 20;
$cidade1 = "Fortaleza";

$nome2 = "Francisco Chang";
$idade2 = 98;
$cidade2 = "California";

echo "
<table>
<tr>
 <th>Nome</th>
 <th>Idade</th>
 <th>Cidade</th>
</tr>
<tr>
 <td>{$nome1}</td>
 <td>{$idade1}</td>
 <td>{$cidade1}</td>
</tr>
<tr>
 <td>{$nome2}</td>
 <td>{$idade2}</td>
 <td>{$cidade2}</td>
</tr>
</table>
";
```

## Autor

[@Jphn](https://github.com/Jphn)

<a href="https://www.beacademy.com.br/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2019/11/Logo-Topo.png" width="300" align="left" /></a>

<a href="https://www.paylivre.com/" target="_blank"><img src="https://web.paylivre.com/static/media/logo-blue.c7100186.png" width="300" align="right" /></a>
