class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if(strlen($s) !== strlen($t))
            return false;
    
        $count = [];
        
        for($i = 0; $i < strlen($s); $i++) {
            $charS = $s[$i];
            $charT = $t[$i];
    
            $count[$charS] = ($count[$charS] ?? 0) + 1;
            $count[$charT] = ($count[$charT] ?? 0) - 1;
        }
        foreach($count as $char) {
            if($char !== 0)
                return false;
        }
        return true;
    }
}
