<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;

use function Celyes\Solutions\removeFirstAndLastLetter;

final class TestSolution1 extends TestCase
{
    public function testIfFirstChallengeSolutionIsCorrect()
    {
        $this->assertEquals(
            removeFirstAndLastLetter("Oh no, I lost my letters"),
            "h no, I lost my letter"
        );
    }
}