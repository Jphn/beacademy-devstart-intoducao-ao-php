<?php

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