<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../index.php';

class ServiceTest extends TestCase
{
    public function testGreet()
    {
        $this->assertEquals('Hello, World!', greet());
        $this->assertEquals('Hello, PHP!', greet('PHP'));
    }

    public function testAdd()
    {
        $this->assertEquals(5, add(2, 3));
        $this->assertEquals(0, add(-1, 1));
        $this->assertEquals(100, add(50, 50));
    }

    public function testMultiply()
    {
        $this->assertEquals(6, multiply(2, 3));
        $this->assertEquals(0, multiply(0, 5));
        $this->assertEquals(25, multiply(5, 5));
    }
}

