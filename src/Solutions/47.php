<?php

namespace Solutions;

function alphabet_position($text){

    $alphabet = range('a', 'z'); 
    
    $strippedText = str_split(strtolower(preg_replace("/[^a-zA-Z]/", "", $text)));
    
    $result = "";
    
    foreach($strippedText as $letter){
        $result .= array_search($letter, $alphabet)+1 . " ";
        
    }
    return $result;
}
