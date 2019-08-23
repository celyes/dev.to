<?php 

function drawDiamond($diameter){
    if($diameter <= 2){
        trigger_error("provide more than 2 in diameter at least ! ", E_USER_WARNING);
    }else{
        $code = "<pre style='text-align: center; font-size: 22px;'>";
        for($i = 1; $i < $diameter; $i+=2){
            $code .= str_repeat("*", $i) . "<br>";
        }
        for($i = $diameter; $i >= 1; $i -= 2){
            $code .= str_repeat("*", $i) . "<br>";
        }
        $code .= "</pre>";
        return $code;
    }
}
echo drawDiamond(2);