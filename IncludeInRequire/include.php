<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'inc/head.php'; ?>    
    <?php $config = include('inc/config.php'); ?>

    <title>Include</title>
</head>
<body>
    <h1><?= 'Include' ?></h1>

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

</body>
</html>