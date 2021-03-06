<?php 

namespace Celyes\Solutions;

use Exception;

function takeAWalk(int $distance){

    if($distance %2 == 1){ 
        throw new Exception("take an even number of steps or no return home! <br>");
    }
    $steps = [];
    $directions = ['n', 'e', 's', 'w'];
    for($i = 1; $i <= $distance; $i+=2){
        $index = array_rand($directions);
        $steps[] = $directions[$index];
        $steps[] = $directions[($index + 2) %4];
    }
    shuffle($steps);
    return $steps;
}
// print_r(takeAWalk(4));