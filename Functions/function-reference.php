<?php

$titulo = 'referencia';
$subtitulo = 'segunda referencia';

function converteTitulo(string &$titulo)
{
    $titulo = mb_convert_case($titulo, MB_CASE_TITLE);
}

function converteTituloEmValor(string $titulo): string
{
    return mb_convert_case($titulo, MB_CASE_TITLE);
}

converteTitulo($titulo);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>
<body>

    <h1><?= $titulo ?></h1>
    <h2><?= converteTitulo($subtitulo) ?></h2>

    <div>
        <?= $subtitulo ?>
    </div>

</body>
</html>