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

    /**
    * @depends testAtributosCalculadora
    */
    public function testConstrutorCalculadora()
    {
        $this->assertTrue(method_exists(Calculadora::class, '__construct'), "Falta o metodo construtor em calculadora");

        // verifica se construtor esta atribuindo valores
        $calc = new Calculadora(4, 2, 'soma');
        $this->assertEquals(4, $calc->getValorA(), "Erro no metodo getValorA");
        $this->assertEquals(2, $calc->getValorB(), "Erro no metodo getValorB");
        $this->assertEquals('soma', $calc->getOperador(), "Erro no metodo getOperador");

        //acesso aos atributos privados
        $this->assertFalse(isset($calc->valorA), "Erro atributo valorA deve ser privado");
        $this->assertFalse(isset($calc->valorB), "Erro atributo valorB deve ser privado");
        $this->assertFalse(isset($calc->operador), "Erro atributo operador deve ser privado");
    }
    
    /**
    * @depends testConstrutorCalculadora
    */
    public function testGetResultadoCalculadora()
    {
        $calc = new Calculadora(4, 2, 'soma');
        $this->assertEquals(4 + 2, $calc->getResultado(), "Erro no metodo getResultado");
        $calc = new Calculadora(4, 0, 'divisao');
        $this->assertEquals("Não é um número", $calc->getResultado(), "Erro no metodo getResultado");
        $calc = new Calculadora(4, 2, 'subtracao');
        $this->assertEquals(4 - 2, $calc->getResultado(), "Erro no metodo getResultado");
        $calc = new Calculadora(4, 2, 'multiplicacao');
        $this->assertEquals(4 * 2, $calc->getResultado(), "Erro no metodo getResultado");
    }

    /**
    * @depends testGetResultadoCalculadora
    */
    public function testStaticCalculadora()
    {
        $resultado = Calculadora::calcular(2, 4, 'soma');
        $this->assertEquals(6, $resultado, "Erro no metodo statico calcular");
    }
}