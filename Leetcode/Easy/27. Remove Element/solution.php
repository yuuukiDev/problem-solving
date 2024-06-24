class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $val
 * @return Integer
 */

    function removeElement(&$nums, $val) {
        $count = count($nums);

        if(!$count)
            return false;
        $map = 0;
        while($map < $count){
            if($nums[$map] === $val) {
                $nums[$map] = $nums[$count - 1];
                $count--;
            } else {
                $map++;
            }
        }
        return $count;
    }
}
