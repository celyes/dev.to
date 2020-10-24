<?php 

namespace Celyes\Solutions;

// $likes = ["Alex", "John", "Jeremiah", "David", "Travis"];

function printLikes($likes) 
{

    switch (count($likes)){
        case (!isset($likes)):
            $message = "no one likes this";
        break;
        case 1:
            $message = "{$likes[0]} likes this";
        break;
        case 2:
            $message = "{$likes[0]} and {$likes[1]} like this";
        break;
        case 3:
            $message = "{$likes[0]}, {$likes[1]} and {$likes[2]} like this";
        break;
        default: 
            $message = "{$likes[0]}, {$likes[1]} and ". ( count($likes) - 2 ) . " others like this";
    }
    return $message;
}
