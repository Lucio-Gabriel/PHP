<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controller Structure</title>
</head>
<body>

    <div>
        <h1>IF</h1>

        <?php
            date_default_timezone_set('America/Sao_Paulo');

            $hour = date('H:i');

            echo $hour . '<br>';

            if ($hour > '06:00' && $hour < '12:00')
            {
                echo 'Good morning!';
            }
            elseif ($hour > '12:00' && $hour < '18:00')
            {
                echo 'Good afternoon!';
            }
            else
            {
                echo 'Good night!';
            }
        ?> <strong>Gabriel</strong>
    </div>

    <div style="margin-top: 50px">
        <h1>SWITCH</h1>

        <?php
            $number = rand(0, 3);

            switch ($number)
            {
                case 0:
                case 1:
                    echo "Numero $number";
                    break;
                case 2:
                    echo 'Numero maior que 1 e menor que 3';
                    break;
                default:
                    echo 'Numero 3';
                    break;
            }
        ?>
    </div>

</body>
</html>
