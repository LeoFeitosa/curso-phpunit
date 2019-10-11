<?php

use App\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{    
    public function testAtributosCalculadora()
    {
        $this->assertClassHasAttribute('valorA', Calculadora::class);
        $this->assertClassHasAttribute('valorB', Calculadora::class);
        $this->assertClassHasAttribute('operador', Calculadora::class);
        $this->assertClassHasAttribute('resultado', Calculadora::class);
    }
}