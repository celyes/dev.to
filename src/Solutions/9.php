<?php 

namespace Solutions;

use Exception;

function formPhoneNumber(array $integers): string
{

    if(count($integers) != 10) {
        throw new Exception('Please provide a valid array!');
    }

    $phone = "(";
    foreach($integers as $index => $number){
       if($number < 10 && $number >= 0){
            $phone .= $number;
            if($index == 2){
                $phone .= ") ";
            }elseif($index == 5){
                $phone .= "-";
            }
       }else{
            throw new Exception("Please provide a valid array!");
       }
    }
    return $phone;

}
echo formPhoneNumber([4, 5, 5, 4, 5, 1, 7, 8, 9, 0]);