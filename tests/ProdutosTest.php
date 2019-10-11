<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class ProdutosTest extends TestCase
{
    use TestCaseTrait;

    public function getConnection()
    {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=teste_dbunit", "root", "root");
        return $this->createDefaultDBConnection($pdo, 'teste_dbunit');
    }

    public function getDataSet()
    {
        return $this->createXMLDataSet('tests/produtos.xml');
    }

    public function testListaProdutos()
    {
    }  
}