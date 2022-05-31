<?php

$senha = '123456789';
$senhaEncoded = base64_encode( $senha );

echo $senha;
echo "\n";
echo base64_decode( $senhaEncoded );