<?php

namespace Hexlet\MyFill\Tests;

use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Fill\fill;

class FillTest extends TestCase
{
    public function testFill(): void
    {
        $array = [1, 2, 3, 4];
        $this->assertEquals([1, 2, 3, 4], fill($array, '*', 4));
        $this->assertEquals([1, '*', '*', 4], fill($array, '*', 1, 3));
        $this->assertEquals(['*', '*', '*', '*'], fill($array, '*'));
        $this->assertEquals(['*', '*', '*', '*'], fill($array, '*', 0, 10));
    }
}
