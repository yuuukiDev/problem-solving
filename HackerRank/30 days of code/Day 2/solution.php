<?php

/*
 * Complete the 'solve' function below.
 *
 * The function accepts following parameters:
 *  1. DOUBLE meal_cost
 *  2. INTEGER tip_percent
 *  3. INTEGER tax_percent
 */

function solve($meal_cost, $tip_percent, $tax_percent) {
    // Write your code here
    $tip = ($meal_cost / 100) * $tip_percent;
    $tax = ($meal_cost / 100) * $tax_percent;
    $total_cost = round($meal_cost + $tip + $tax);
    echo $total_cost;
}

$meal_cost = doubleval(trim(fgets(STDIN)));

$tip_percent = intval(trim(fgets(STDIN)));

$tax_percent = intval(trim(fgets(STDIN)));

solve($meal_cost, $tip_percent, $tax_percent);

