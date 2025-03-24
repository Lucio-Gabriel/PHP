<?php $title='scope operator' ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?></title>
</head>
<body>
    <h1>
        <?= $title ?>
    </h1>

    <div>
        <h2>Constantes</h2>

        <?php 
            class MyExampleWithConstants {
                public const MY_CONSTANT = 'Example with constants';
            }
        ?>

        <br><br>

        <!-- Acessando nossa constante de fora da classe com o operador de resolucao de scopo -->
        <?= MyExampleWithConstants::MY_CONSTANT ?>
    </div>

    <div style="margin-top: 50px;">
        <h2>Self</h2>
        <?php
            class MyExampleWithSelf {
                protected const MESSAGE = 'We are on the `self` example';

                public function showMessage(): string
                {
                    return self::MESSAGE;
                }
            }
        ?>

        <br><br>
        <?= (new MyExampleWithSelf())->showMessage() ?>
    </div>

    <!-- <div style="margin-top: 50px;">
        <h2>Static</h2>

        <?php
            // class MySuperStaticComponent 
            // {
            //     public static function who(): string 
            //     {
            //         // Uma constante magica do PHP
            //         return __CLASS__;
            //     }

            //     public function greetings(): string 
            //     {
            //         return 'Hello from' . sta::who();
            //     }
            // }

            // class MyStaticComponent extends MySuperStaticComponent 
            // {
            //     public static function who(): string
            //     {
            //         return __CLASS__;
            //     }
            // }
        ?>
    </div> -->

    <div style="margin-top: 50px;">
        <h2>Parent</h2>

        <?php

        class Vehicle 
        {
            protected bool $started = false;

            public function startEngine(): void 
            {
                $this->started = true;
            }
        }

        class Car extends Vehicle
        {
            protected $isOnNeutral = false;

            public function startEngine(): void
            {
                $this->isOnNeutral = true;

                parent::startEngine();
            }
        }
        ?>

        <br><br>
        <?php 
        $car = new Car();
        var_dump($car); 
        ?>
        
        <br><br>
        <?php
         $car->startEngine();
         var_dump($car);
        ?>
    </div>
</body>
</html>