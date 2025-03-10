<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice01</title>
</head>
<body>
    <div>
        <h3>should be able a functions of soma number</h3>

        <?php

        function soma(int $a, int $b): int
        {
            return $a + $b;
        }

        $result = soma(3, 3);

        echo $result;

        ?>
    </div>

    <div style="margin-top: 10px;">
        <h3>function should be able return name of user</h3>

        <?php

            $nameUser = 'Lucio Azevedo!';

            function returnName(string $nameUser): string
            {
                return "Welcome $nameUser";
            }

            $viewName = returnName($nameUser);

            echo $viewName;
        ?>
    </div>

    <div style="margin-top: 10px;">
        <h3>function should be able return a number double</h3>

        <?php

            function doubleNumber(int $number): int
            {
                return $number * 2;
            }

            $resultTwo = doubleNumber(5);

            echo $resultTwo
        ?>
    </div>

</body>
</html>