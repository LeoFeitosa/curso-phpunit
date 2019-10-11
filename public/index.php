<?php
require '../vendor/autoload.php';

use App\Calculadora;

$calc = new Calculadora(2, 2, 'subtracao');

echo $calc->getResultado();

echo "<br> 2 + 2 = " . Calculadora::calcular(2, 2, 'soma');