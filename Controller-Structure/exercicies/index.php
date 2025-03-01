<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicies</title>
</head>
<body>
    
    <div>
        <h1>Nota aluno</h1>
        <?php
            $nota = 8;

            if ($nota >= 7)
            {
                echo "Aluno aprovado!";
            }
            elseif ($nota >= 6)
            {
                echo "Aluno em recuperacao!";
            }
            else
            {
                echo "Aluno reprovado!";
            }
        ?>
    </div>

    <div style="margin-top: 30px">
        <h1>Sistemas de pedidos</h1>

        <?php
            $pedido = 2;
            
            $foodOne = "pizza";

            $foodTwo = "hambuguer";

            if ($pedido == 1)
            {
                echo "Voce selecionou a " . $foodOne;
            }
            elseif ($pedido == 2)
            {
                echo "Voce selecionou o " . $foodTwo;
            }
            else
            {
                echo "Selecione algo";
            }
        ?>
    </div>


</body>
</html>