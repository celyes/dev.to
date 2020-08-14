<?php 

namespace Solutions;

function likes(array $names): string
{
  $likeWord = "like";
  $string = "";
  switch(count($names)){
    case 0:
      $string = sprintf("No one %s this", $likeWord."s");
      break;
    case 1:
      $string = sprintf("%s %s this", $names[0],$likeWord."s");
      break;
    case 2:
      $string = sprintf("%s and %s %s this", $names[0], $names[1], $likeWord);
      break;
    case 3:
      $string = sprintf("%s, %s and %s %s this", $names[0], $names[1], $names[2], $likeWord);
      break;
    default:
      $string = sprintf("%s, %s and %s others %s this", $names[0], $names[1], count($names) -2 , $likeWord);
  }
  return $string;
}
