<?php

class Venda
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct($data, $produto, $quantidade, $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;

    }
    public function exibeInfoVenda()
    {
        return 'No dia ' . $this->data . ' foi realizada uma venda de ' . $this->quantidade . ' ' . $this->produto . '(s). No valor total de: R$' . $this->valorTotal ;
    }
}

$venda = new Venda(
    '29/05/1997',
    'carro',
    '5',
    '250,000.00'
);

echo $venda->exibeInfoVenda();