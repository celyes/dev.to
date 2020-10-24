<?php 

namespace Celyes\Solutions;

function countVowels($string){
    preg_match_all("/[aeiou]/i", $string, $matches);
    return sizeof($matches[0]);
}
