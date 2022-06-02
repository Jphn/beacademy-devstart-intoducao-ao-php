<?php

function mostrarNome( array $nomes ): void
{
    foreach ( $nomes as $nome ) {
        echo "Nome: {$nome}";
    }
}