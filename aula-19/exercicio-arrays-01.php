<?php

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
