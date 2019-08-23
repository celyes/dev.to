<?php 
$likes = ["Alex", "John", "Jeremiah", "David", "Travis"];

switch ($likes){
    case (!isset($likes)):
        $message = "no one likes this";
    break;
    case (sizeof($likes) == 1):
        $message = "$likes[0] likes this";
    break;
    case (sizeof($likes) == 2):
        $message = "$likes[0] and $likes[1] like this";
    break;
    case (sizeof($likes) == 3):
        $message = "$likes[0], $likes[1] and $likes[2] like this";
    break;
    case (sizeof($likes) > 3):
        $message = "$likes[0], $likes[1] and ". ( sizeof($likes) - 2 ) . " others like this";
    break;
    default: 
        $message = "no one likes this";
}
echo $message;
