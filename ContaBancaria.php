<?php

class ContaBancaria
{

    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo()
    {
        return 'Saldo disponível: R$' . $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return 'Depósito de ' . $valor . ' realizado.';
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return 'Saque de ' . $valor . ' realizado.';
    }
}

$conta = new ContaBancaria(
'Banco do Brasil', // banco
'Misael Sauceda', // nome titular
'0001',// numero agência
'12345-67',// numero conta
0.00// saldo
);

echo $conta->obterSaldo();

echo PHP_EOL;

echo $conta->depositar(2500.00);

echo PHP_EOL;

echo $conta->sacar(1300.00);

echo PHP_EOL; 