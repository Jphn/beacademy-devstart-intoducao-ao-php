<?php

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
