<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;

use function Celyes\Solutions\report;

final class TestSolution4 extends TestCase
{
    public function testIfThirdChallengeSolutionIsCorrect()
    {
        $text = '1233.00
        125 Hardware;! 24.8?;
        123 Flowers 93.5
        127 Meat 120.90
        120 Picture 34.00
        124 Gasoline 11.00
        123 Photos;! 71.4?;
        122 Picture 93.5
        132 Tires;! 19.00,?;
        129 Stamps 13.6
        129 Fruits{} 17.6
        129 Market;! 128.00?;
        121 Gasoline;! 13.6?;';

        $this->assertIsString(report($text));
    }
}