def isInLooped(char, aStr):
    '''
    char: a single character
    aStr: an alphabetized string
    
    check if abcdefghjikl has i
    so we divide and conquer

    returns: True if char is in aStr; False otherwise
    '''

    stringLen = len(aStr) - 1
    if stringLen == 1:
        return char == aStr
    
    low = 0
    high = stringLen
    while low <= high:
        middlePos = (low + high) // 2
        middleChar = aStr[middlePos]
        if char == middleChar:
            return True
        elif char > middleChar:
            low = middlePos + 1 
        else:
            high = middlePos - 1
    
    return False        


print(isInLooped('a', 'abcd'))
print(isInLooped('c', 'abdefghijklmn'))
print(isInLooped('i', 'abcdefghjiklm'))
print(isInLooped('b', 'abcdefghjiklm'))
