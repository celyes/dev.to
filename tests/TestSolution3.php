<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;

use function Celyes\Solutions\countVowels;

final class TestSolution3 extends TestCase
{
    public function testIfThirdChallengeSolutionIsCorrect()
    {
        $this->assertEquals(countVowels("sUpercalifragilisticexpialidocious"), 16);
    }
}