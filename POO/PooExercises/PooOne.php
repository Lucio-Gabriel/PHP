<?php 

class Cars {
    public string $marca;

    public string $modelo;

    public int $ano;

    public function __construct(string $name, int $rg)
    {
        echo "CNH do usuario aprovada!";
    }

    public function marcaCarro(): string
    {
        return $this->marca;
    }

    public function modeloCarro(): string
    {
        return $this->modelo;
    }

    public function anoCarro(): int
    {
        return $this->ano;
    }
}

$car = new Cars('Gabriel', 0443);

echo "Marca: ". $car->marca = 'Fiat'."<br>";
echo "Modelo: ". $car->modelo = 'Uno'. "<br>";
echo "Ano: ". ($car->ano = 2016) . "<br>";

?>