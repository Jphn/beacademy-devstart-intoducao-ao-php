<?php

$senha = '123456789';
$senhaEncoded = password_hash( $senha, PASSWORD_ARGON2I );

echo $senhaEncoded;