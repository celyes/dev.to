<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;

// functions
use function Celyes\Solutions\find_short;

final class TestSolution298 extends TestCase
{
    public function testIfChallenge298SolutionIsCorrect()
    {
        $this->assertEquals(find_short("bitcoin take over the world maybe who knows perhaps"), 3);
        $this->assertEquals(find_short("Lets all go on holiday somewhere very cold"), 2);
    }
}