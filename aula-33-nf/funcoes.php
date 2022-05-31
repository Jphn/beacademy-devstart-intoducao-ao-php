<?php

function outraSoma( int $n1, int $n2 ): int
{
    return $n1 + $n2;
}

echo outraSoma( 1, 2 );
echo outraSoma( 30, 50 );
echo outraSoma( 'João', 'Pedro' );