<?php 

namespace Solutions;

$friends = [["A1", "X1"], ["A2", "X2"], ["A3", "X3"], ["A4", "X4"]];
$distances = [["X1", 100], ["X2", 200], ["X3", 250], ["X4", 300]];

$distances = array_reduce($distances, function($x, $y){
    $x[$y[0]] = $y[1]; 
    return $x;
});

function getTotalDistance($friends, $distances){
    $total = 0;
    for($x = 0; $x < count($friends); $x++){
        if(count($friends[$x]) === 2){
            $total += ($distances[$friends[$x][1]] * 2);
        }
    }
    return $total;
}
echo getTotalDistance($friends, $distances);