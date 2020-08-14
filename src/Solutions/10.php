<?php 

namespace Solutions;

function evaluate(string $x){
    return eval('return '.$x.';');
}
echo evaluate("2 / 2 + 3 * 4 - 6");