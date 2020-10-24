<?php

namespace Celyes\Solutions;

function report(string $str) {
    
    $data = explode(PHP_EOL, $str);
    $data = array_map(function($line){
        return preg_replace('/[^\w\s.]+/', '', $line);
    }, $data);
    
    $balance = floatval(array_shift($data));
    $result = 'Original Balance: ' . number_format($balance, 2) . "\n";
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
        $result .= number_format(end($parts), 2) . ', Balance: ' . number_format($balance, 2) . "\n";
    }

    $total_expenses = array_sum($expenses);
    $result .= 'Total expenses: ' . number_format($total_expenses, 2) . "\n";
    $result .= 'Average expense: ' . number_format($total_expenses / count($expenses), 2) . "\n";
    return $result;
}
