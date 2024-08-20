class MyQueue:

    def __init__(self):
        self.queue = []
    def push(self, x: int) -> None:
        self.queue.append(x)
    def pop(self) -> int:
        if not self.queue:
            raise Exception("nothing to pop")
        return self.queue.pop(0)
    def peek(self) -> int:
        if not self.queue:
            raise Exception("nothing to peek")
        return self.queue[0]
    def empty(self) -> bool:
        return not self.queue
        


# Your MyQueue object will be instantiated and called as such:
# obj = MyQueue()
# obj.push(x)
# param_2 = obj.pop()
# param_3 = obj.peek()
# param_4 = obj.empty()
