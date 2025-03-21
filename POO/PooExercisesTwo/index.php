<?php $title='Sistema Escolar'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    
    <h1>
        <?= $title ?>
    </h1>

    <div style="margin-top: 50px;">
        <?php 
            class Escola {

                public string $diretores;

                public string $professores;

                public string $alunos;

                public bool $todosUniformizados = false;

                public function __construct(string $nomeDaEscola, int $CNPJ)
                {
                    echo "Nome da escola: $nomeDaEscola e o CNPJ: $CNPJ";
                }

                public function uniformizados(): bool
                {
                    return $this->todosUniformizados = true;

                    echo "sim esta devidamente uniformizado";
                }
            }

            class RegistroDeDiretores extends Escola {
                public string $diretores;

                public function cadastroDiretores(string $diretores): string
                {
                    return $this->diretores;
                }

                public function diretoresUniformizados(string $diretoreUniformizado)
                {
                    parent::uniformizados($diretoreUniformizado);
                }
            }

            class RegistroDeProfessores extends Escola {
                public string $professores; 

                public function cadastroProfessores(string $professores): string
                {
                    return $this->professores;
                }
            }

            class RegistroDeAlunos extends Escola {
                public string $alunos; 

                public function cadastroAlunos(string $alunos): string
                {
                    return $this->alunos;
                }   
            }         

            $result = new Escola('Afredo Marquez', 123);
            echo "<br><br>";    

            echo "Diretores: " . "<br>";
            echo $diretores = "Marcia". "<br>";
            echo $diretores = "Marcelo";

            echo "<br><br>"; 
            $diretor = new RegistroDeDiretores('Sao paulo', 66120);
            $diretor->diretoresUniformizados('Diretor devidamente arrumado');
            var_dump($diretor);
        
            echo "<br><br>";
            echo "Professores: " . "<br>";
            echo $professores = "Silvana". "<br>";
            echo $professores = "Chaves";

            echo "<br><br>";
            echo "Alunos: " . "<br>";
            echo $Alunos = "Marcos". "<br>";
            echo $Alunos = "Ana";
            echo $Alunos = "Bruno" . "<br>";
            echo $Alunos = "Thiago";

            echo $result;
        ?>
    </div>

</body>
</html>