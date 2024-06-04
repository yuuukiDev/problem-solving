<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
     function twoSum(array $nums, int $target) : array {
        for($i = 0; $i < count($nums); $i++) {
            for($j = $i + 1; $j < count($nums); $j++) {
                if($nums[$i] + $nums[$j] === $target)
                    return [$i, $j];
            }
        }
        return [];
     }
}
<?
