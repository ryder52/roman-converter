<?php
/**
 * Created by PhpStorm.
 * User: dusan.mikolas
 * Date: 2019-04-05
 * Time: 12:26
 */

namespace Mikolas;

use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{

    public function testArabicToRoman(): void
    {
        $output = Converter::arabicToRoman(43);
        $this->assertEquals('XLIII', $output);
    }

    public function testCorrectReturnType(): void
    {
        $output = Converter::arabicToRoman(43);
        $this->assertTrue(is_string($output), "Got " . gettype($output) . " instead of string");
    }

    public function testThrowException(): void
    {
        $this->expectException(NegativeArgumentException::class);
        Converter::arabicToRoman(-43);
    }
}
