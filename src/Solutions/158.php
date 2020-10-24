<?php

namespace Celyes\Solutions;

// round the number to the closest value (255 or 0)
function roundToClosest($color)
{ 
    if($color > 255){
        $color = 255;
    }elseif($color < 0){
        $color = 0;
    }
    return $color;
}

function rgb($r, $g, $b)
{

    $r = roundToClosest($r);
    $g = roundToClosest($g);
    $b = roundToClosest($b);

    // convert to hexadecimal

    $r = dechex($r);
    $g = dechex($g);
    $b = dechex($b);

    //add a "0" if the result's length is less than 2

    if(strlen($r) < 2): $r = "0" . $r; endif;
    if(strlen($g) < 2): $g = "0" . $g; endif;
    if(strlen($b) < 2): $b = "0" . $b; endif;

    //return the color value in uppercase

    return strtoupper("#" . $r . $g . $b);
}