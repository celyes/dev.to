<?php

namespace Solutions;

function report(string $str) {
    
    $data = explode(PHP_EOL, $str);
    $data = array_map(function($line){
        return preg_replace('/[^\w\s.]+/', '', $line);
    }, $data);
    
    $balance = floatval(array_shift($data));
    $result = 'Original Balance: ' . number_format($balance, 2) . "<br>";
    $expenses = [];
    sort($data);
    foreach ($data as $index => $line) {
        $parts = explode(' ', $line);
        foreach ($parts as $line_segment) {
            if ($line_segment != end($parts)) {
                $result .= "$line_segment ";
            }
        }
        $expenses[] = floatval(end($parts));
        $balance -= end($expenses);
        $result .= number_format(end($parts), 2) . ', Balance: ' . number_format($balance, 2) . "<br>";
    }

    $total_expenses = array_sum($expenses);
    $result .= 'Total expenses: ' . number_format($total_expenses, 2) . "<br>";
    $result .= 'Average expense: ' . number_format($total_expenses / count($expenses), 2) . "<br>";
    return $result;
}


$text = '1233.00
125 Hardware;! 24.8?;
123 Flowers 93.5
127 Meat 120.90
120 Picture 34.00
124 Gasoline 11.00
123 Photos;! 71.4?;
122 Picture 93.5
132 Tires;! 19.00,?;
129 Stamps 13.6
129 Fruits{} 17.6
129 Market;! 128.00?;
121 Gasoline;! 13.6?;';

echo report($text);