<?php
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}
printEvenNumbersFor(2, 20, 2);



function printEvenNumbersWhile($start, $end, $step) {
    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}

printEvenNumbersWhile(2, 20, 2);




function printEvenNumbersDoWhile($start, $end, $step) {
    do {
        echo $start . " ";
        $start += $step;
    } while ($start <= $end);
}

printEvenNumbersDoWhile(2, 20, 2);
