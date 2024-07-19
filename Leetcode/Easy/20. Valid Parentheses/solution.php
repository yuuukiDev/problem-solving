class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        $map = [
            ")" => "(",
            "]" => "[",
            "}" => "{",
        ];
        for($i = 0; $i < strlen($s); $i++){
            $char = $s[$i];
            if(array_key_exists($char, $map)){
                if(empty($stack) || $stack[count($stack) - 1] != $map[$char]){
                    return false;
                }
                array_pop($stack);
            } else {
                array_push($stack, $char);
            }
        }
        return empty($stack);
    }
}
