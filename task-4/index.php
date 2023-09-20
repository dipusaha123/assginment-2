<?php
function printFibonacciSeries($count) {
    $first = 0;
    $second = 1;

    for ($i = 1; $i <= $count; $i++) {
     
        echo $first . " ";

        $next = $first + $second;

        $first = $second;
        $second = $next;
    }
}

printFibonacciSeries(15);
