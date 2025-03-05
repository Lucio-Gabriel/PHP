<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'inc/head.php' ?>
    <?php $config = require('inc/config.php'); ?>
    <?php include_once('inc/greetings.php'); ?>

    <title>Require</title>
</head>
<body>

    <h1><?= 'Require' ?></h1>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Senha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $config['username'] ?></td>
                    <td><?= $config['password'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div style="margin-top: 50px;">
        <h2>Ola <?= $name ?> </h2>
    </div>
</body>
</html>