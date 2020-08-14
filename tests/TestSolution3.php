<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;

use function Solutions\countVowels;

final class TestChallenge3 extends TestCase
{
    public function testIfThirdChallengeSolutionIsCorrect()
    {
        $this->assertEquals(countVowels("sUpercalifragilisticexpialidocious"), 16);
    }
}