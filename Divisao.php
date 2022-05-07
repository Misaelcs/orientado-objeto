<?php

function divisao(array $numeros)
{
    $resultado = 0;

    if ($numeros[0] == 0 || $numeros[1] == 0)
    {
        throw new Exception('Não se pode dividir por 0(zero)');
    }
    else
    {
        $resultado = $numeros[0] / $numeros[1];
        return 'O resultado é ' . $resultado;
    }
}

$numeros = [
    300,
    30
];

try {
    echo divisao($numeros);
} catch (Exception $e) {
echo $e->getMessage();
die();
}