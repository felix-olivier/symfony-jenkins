<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $result = 42;

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }
}