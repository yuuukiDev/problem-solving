class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if(strlen($s) !== strlen($t))
            return false;
    
        $countS = [];
        $countT = [];
        
        for($i = 0; $i < strlen($s); $i++) {
            $charS = $s[$i];
            $charT = $t[$i];
    
            $countS[$charS] = ($countS[$charS] ?? 0) + 1;
            $countT[$charT] = ($countT[$charT] ?? 0) + 1;
        }
        foreach($countS as $char => $count) {
            if(($countT[$char] ?? 0) !== $count)
                return false;
        }
        return true;
    }
}
