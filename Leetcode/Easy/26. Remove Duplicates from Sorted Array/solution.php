class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums){
         if(!count($nums))
            return false;
        $map = 0;
        foreach($nums as $num){
            if($num !== $nums[$map])
                $map++;
            $nums[$map] = $num;
        }
        return $map + 1;
    }
}
