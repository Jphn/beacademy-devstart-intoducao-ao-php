<?php

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
