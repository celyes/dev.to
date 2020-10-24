<?php 

namespace Celyes\Solutions;

function find_short(string $str): int
{
    $str = preg_split('/\s/', $str); // you can use explode(' ', $str)

    usort($str, function($a, $b){
      return strlen($a) > strlen($b);
    });
    return strlen($str[0]);
}
