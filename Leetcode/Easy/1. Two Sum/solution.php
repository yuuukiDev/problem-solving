class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
 function twoSum(array $nums, int $target) : array {
    $map = [];

    foreach($nums as $index => $num) {
        $complement = $target - $num;
        if(isset($map[$complement]))
            return [$map[$complement], $index];
        $map[$num] = $index;
    }
    return [];
 }
}
