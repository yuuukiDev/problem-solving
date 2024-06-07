<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus(array $arr) {
    // Write your code here
    $positive = 0;
    $negative = 0;
    $zeros = 0;
    $arrayLength = count($arr);
    foreach($arr as $num) {
        $num > 0 ? $positive++ : false; 
        $num < 0 ? $negative++ : false; 
        $num === 0 ? $zeros++ : false; 
    }
    echo implode("\n", [number_format($positive / $arrayLength, 6)
    , number_format($negative / $arrayLength, 6)
    , number_format($zeros / $arrayLength, 6)]);
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

