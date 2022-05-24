<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# Introdução ao PHP - Exercícios

## Incremento/decremento e concatenação

- Aula 09
- Aula 10

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

## Autor

[@Jphn](https://github.com/Jphn)

<a href="https://www.beacademy.com.br/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2019/11/Logo-Topo.png" width="300" align="left" /></a>

<a href="https://www.paylivre.com/" target="_blank"><img src="https://web.paylivre.com/static/media/logo-blue.c7100186.png" width="300" align="right" /></a>
