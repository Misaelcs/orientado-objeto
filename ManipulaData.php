<?php

$data = new DateTime();

echo $data->format('d-m-Y H:i:s');

$intervalo = new DateInterval('P5DT10H50M');

$data->sub($intervalo);

echo PHP_EOL;

echo $data->format('d-m-Y H:i:s');