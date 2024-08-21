class Solution:
    def canConstruct(self, ransomNote: str, magazine: str) -> bool:
        mapR, mapM = {}, {}

        for char in ransomNote:
            mapR[char] = 1 + mapR.get(char, 0)
        for char in magazine:
            mapM[char] = 1 + mapM.get(char, 0)
        for char in mapR:
            if mapR[char] > mapM.get(char, 0):
                return False
        return True
