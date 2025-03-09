<?php

function soma(int $a, int $b): int
{
    return $a + $b;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions tipadas</title>
</head>
<body>
    
    <div>
        <h1>Functions tipadas</h1>


        <?php 
            echo soma(rand(10, 50), rand(51, 90));
        ?>

    </div>

</body>
</html>