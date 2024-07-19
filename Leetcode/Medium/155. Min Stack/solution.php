class MinStack {
    /**
     */
    public $stack = [];
  
    /**
     * @param Integer $val
     * @return NULL
     */
    function push($val) {
        return array_push($this->stack, $val);
    }
  
    /**
     * @return NULL
     */
    function pop() {
        if(!$this->stack){
            throw new Exception("No Stacks to POP");
        }
        return array_pop($this->stack);
    }
  
    /**
     * @return Integer
     */
    function top() {
        if(!$this->stack){
            throw new Exception("No Stacks to Peek");
        }
        return end($this->stack);
    }
  
    /**
     * @return Integer
     */
    function getMin() {
      if(!$this->stack){
            throw new Exception("No Stacks to Min");
        }
        return min($this->stack);
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($val);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */
