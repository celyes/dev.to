<?php 

namespace Solutions;

function expressionMatters($a, $b, $c){

    if($a < 0 || $b < 0 || $c < 0) {
        die("one of the operands is negative!");
    }
    $results = [];
    $results[] = $a + $b * $c;
    $results[] = $a * ($b + $c);
    $results[] = $a * $b * $c;
    $results[] = $a * $b + $c;
    $results[] = $a + $b * $c;
    $results[] = ($a + $b) * $c;
    $results[] = $a + $b + $c;
    return max($results);
}
echo expressionMatters(9, 1, 1);