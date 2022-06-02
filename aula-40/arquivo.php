<?php

$arquivo = fopen( __DIR__ . '/produtos.csv', 'a+' );

fwrite( $arquivo, 'João' . PHP_EOL );
fwrite( $arquivo, 'Pedro' . PHP_EOL );
fwrite( $arquivo, 'Holanda' . PHP_EOL );
fwrite( $arquivo, 'Neves' . PHP_EOL );

fclose( $arquivo );
