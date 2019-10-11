<?php
use PHPUnit\Framework\TestCase;

class MeuPrimeiroTest extends TestCase
{    
    public function testPrimeiroTest()
    {
        $test = 1 == 1;
        $this->assertTrue($test);
    }
}