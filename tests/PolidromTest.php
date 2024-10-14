<?php

namespace Hexlet\MyPolidrom\Tests;

use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Polidrom\isPalindrome;

// Класс UtilsTest наследует класс TestCase
// Имя класса совпадает с именем файла
class PolidromTest extends TestCase
{
    // Метод (функция), определенный внутри класса,
    // Должен начинаться со слова test
    // Ключевое слово public нужно, чтобы PHPUnit мог вызвать этот тест снаружи
    public function testPolidrom(): void
    {
        $this->assertTrue(isPalindrome('radar'));
        $this->assertTrue(isPalindrome('a'));
        $this->assertFalse(isPalindrome('asc'));
        $this->assertFalse(isPalindrome(''));
    }
}
