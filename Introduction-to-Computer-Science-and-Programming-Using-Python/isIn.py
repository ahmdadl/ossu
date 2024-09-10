def isIn(char, aStr):
    '''
    char: a single character
    aStr: an alphabetized string
    
    check if abcdefghjikl has i
    so we divide and conquer

    returns: True if char is in aStr; False otherwise
    '''
    length = len(aStr)
    if length == 1:
        return char == aStr
    
    middlePos =  length // 2
    middleChar = aStr[middlePos]
    if middleChar == char:
        return True
    elif middleChar > char:
        return isIn(char, aStr[:middlePos])
    elif middleChar < char:
        return isIn(char, aStr[middlePos:])
    

print(isIn('c', 'abcd'))
print(isIn('c', 'abdlkdsfkljdlf'))
print(isIn('i', 'abcdefghjiklm'))
print(isIn('b', 'abcdefghjiklm'))


