<?php
require '../vendor/autoload.php';

use App\Calculadora;

$calc = new Calculadora(2, 2, 'subtracao');

echo $calc->getResultado();