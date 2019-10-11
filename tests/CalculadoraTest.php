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

    /**
    * @depends testAtributosCalculadora
    */
    public function testMetodosCalculadora()
    {
        $this->assertTrue(method_exists(Calculadora::class, 'getValorA'), "Falta o metodo getValorA");
        $this->assertTrue(method_exists(Calculadora::class, 'getValorB'), "Falta o metodo getValorB");
        $this->assertTrue(method_exists(Calculadora::class, 'getOperador'), "Falta o metodo getOperador");
        $this->assertTrue(method_exists(Calculadora::class, 'getResultado'), "Falta o metodo getResultado");
    }
}