<?php 

namespace Celyes\Solutions;

function find_short(string $str): int
{
  $str = explode(' ', $str); // you can use preg_split('/\s/', $str);
  usort($str, fn($a, $b) => strlen($a) > strlen($b));
  return strlen($str[0]);
}
