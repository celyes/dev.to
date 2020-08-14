<?php 

namespace Solutions;

function drawDiamond(int $diameter): string
{
    if($diameter <= 2){
        trigger_error("provide more than 2 in diameter at least ! ", E_USER_WARNING);
    }else{
        $code = "";
        for($i = 1; $i < $diameter; $i+=2){
            $code .= str_repeat("*", $i) . "\n";
        }
        for($i = $diameter; $i >= 1; $i -= 2){
            $code .= str_repeat("*", $i) . "\n";
        }
        return $code;
    }
}