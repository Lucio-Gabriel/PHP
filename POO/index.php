<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <h1>
        Classes O Basico
    </h1>

    <div>
        <?php

            class Pessoa 
            {
                public ?string $nacionalidade = null;

                public function __construct(protected string $name, protected int $idade, protected string $corDoCabelo)
                {
                    
                }

                public function andar(): string
                {
                    return $this->name. 'esta andando....';
                }

                public function falar(): string
                {
                    return $this->name. 'esta falando...';
                }

                public function Nome(): string
                {
                    return $this->name;
                }

                public function Idade(): string
                {
                    return $this->idade;
                }
                
                public function CorDoCabelo(): string
                {
                    return $this->corDoCabelo;
                }
                
                public function setNome(string $name): self
                {
                    $this->name = $name;

                    return $this;
                }

                public function setIdade(int $idade): self
                {
                    $this->idade = $idade;

                    return $this;
                }

                public function setCorDoCabelo(string $corDoCabelo): self
                {
                    if(!in_array($corDoCabelo, ['loiro', 'preto', 'castanho', 'ruivo'])) {
                        throw new \InvalidArgumentException('Cor do cabelo invalida');
                    }
                    
                    $this->corDoCabelo = $corDoCabelo;

                    return $this;
                }
            }

            $pessoa = new Pessoa(
                'Gabriel',
                 21, 
                'preto'
            );

            var_dump($pessoa);

            $pessoa->nacionalidade = 'Brasileiro';
            $pessoa->setNome('Jhon doe');
            $pessoa->setIdade(21);
            $pessoa->setCorDoCabelo('loiro');

            var_dump($pessoa);

            echo "<br><br>";

            echo $pessoa->andar() . '<br>';
            echo $pessoa->falar() . '<br>';
            echo $pessoa->Nome() . '<br>';
            echo $pessoa->Idade() . '<br>';
            echo $pessoa->CorDoCabelo() . '<br>';
        ?>
    </div>
</body>
</html>