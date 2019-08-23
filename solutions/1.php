<?php 
function removeFirstAndLastLetter($text){
    return substr($text, 1, -1);
}
echo removeFirstAndLastLetter("Oh no, I lost my letters");