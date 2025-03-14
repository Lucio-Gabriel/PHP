<?php

class ContaBancaria {
    public string $titular;

    public int $saldo;

    public function __construct(string $titular, int $saldoInicial = 0)
    {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar(int $valor): void
    {
        $this->saldo += $valor;
        echo "Deposito de R$ {$valor} realizado com sucesso! <br>"; 
    }

    public function sacar(int $valor): void
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "saque de R$ {$valor} realizado com sucesso!<br>";
        } else {
            echo "Saldo insuficente para saque de R$ {$valor}. Saldo atual: R$ {$this->saldo}<br>";
        }
    }

    public function exibirSaldo(): void
    {
        echo "Saldo atual: R$ {$this->saldo}<br>";
    }
}

$conta = new ContaBancaria('Lucio', 500);

echo "Titular: {$conta->titular}<br>";
$conta->exibirSaldo();

$conta->depositar(500);
$conta->sacar(300);
$conta->exibirSaldo();
$conta->sacar(1500);

?>