<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;

use function Celyes\Solutions\drawDiamond;

final class TestSolution2 extends TestCase
{
    public function testIfSecondChallengeSolutionIsCorrect()
    {
        $this->assertEquals(
            substr_count(drawDiamond(99), '*'),
            4901
        );
    }
}