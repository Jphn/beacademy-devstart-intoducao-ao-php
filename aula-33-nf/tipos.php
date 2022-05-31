<?php

function welcomeTipado( string $nome ): string
{
    return "Olá {$nome}, seja bem-vindo!";
}

echo welcomeTipado( 'João' );