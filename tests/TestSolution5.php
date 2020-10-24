<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;

use function Celyes\Solutions\takeAWalk;

final class TestSolution5 extends TestCase
{
    public function testIfThirdChallengeSolutionIsCorrect()
    {
        $steps = takeAWalk(4);
        $this->assertIsArray($steps);
        $this->assertEquals(count($steps), 4);
    }
}