<?php 

namespace Solutions;

function is_isogram($s) 
{
    $s = strtolower($s);
    return count(array_unique(str_split($s, 1))) == count(str_split($s, 1));
}