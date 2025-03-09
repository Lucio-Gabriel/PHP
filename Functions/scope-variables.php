<?php

$titulo = 'Senhor';

function ola(string $nome): string
{
    // Acessando a variavel acima ou seja global
    global $titulo;

    // Manipulando a variavel
    return "Ola $titulo $nome";
}

echo ola('Lucio');
?>
