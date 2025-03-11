<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
    <h1>
        Arrays
    </h1>

    <div>
        <h2>
            Declarando Arrays
        </h2>

        <div>
        <?php 
            $frutas = ['maca', 'abacate', 'goiaba'];

            print_r($frutas);
            ?>
        </div>

        <div style="margin-top: 10px;">
            <?php
                $maisFrutas = array('manga', 'acerola', 'laranja');

                print_r($maisFrutas);
            ?>
        </div>

        <div style="margin-top: 10px;">
            <?php
                $array = [
                    1 => 'Este e o numero 1',
                    'nome' => 'Gabriel',
                    false => 'Nada por aqui',
                ];

                print_r($array);
            ?>
        </div>

        <div style="margin-top: 10px;">
            <?php
                
                $users = [
                    [
                        'name' => 'Jane doe',
                        'email' => 'jane@doe.com'
                    ],
                    [
                        'name' => 'Maria doe',
                        'email' => 'maria@doe.com'
                    ]
                ];

                print_r($users);
            ?>
        </div>
    </div>

    <div style="margin-top: 50px;">
        <div>
            <h2>
                Acessando dados do array
            </h2>

            <?php
                $frutas = ['maca', 'banana', 'laranja'];

                echo $frutas[0];
                echo $frutas[1];
                echo $frutas[2];
            ?>
        </div>
    </div>

    <div style="margin-top: 50px;">
        <div>
            <h2>
                Acessando dados com foreach
            </h2>
            
            <?php $frutas = ['maca', 'banana', 'laranja']; ?>

            <ul>
                <?php foreach ($frutas as $fruta): ?>
                <li>
                    <?= $fruta; ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div style="margin-top: 50px;">
        <div>
            <h2>
                Acessando dados com String
            </h2>
            
            <?php 
                $users = [
                    [
                        'name' => 'Jane doe',
                        'email' => 'jane@doe.com'
                    ],
                    [
                        'name' => 'Maria doe',
                        'email' => 'maria@doe.com'
                    ]
                ];   
            ?>

            <ul>
                <?php foreach ($users as $user): ?>
                    <li><?= $user['name'] ?> (<?= $user['email'] ?>)</li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div style="margin-top: 50px;">
        <div>
            <h2>
                Adicionando dados no array
            </h2>
            
            <?php 
                $frutas = ['limao', 'tangirina', 'kiwi'];

                print_r($frutas);

                $frutas[] = 'laranja';
                print_r($frutas);
            ?>

            <div style="margin-top: 20px;">
                <?php 
                    $frutas = ['limao', 'tangirina', 'kiwi'];

                    print_r($frutas);

                    array_push($frutas, 'laranja', 'coco', 'abacaxi');
                    print_r($frutas);
                ?>
            </div>
        </div>
    </div>

</body>
</html>