def iterPower(base, exp):
    '''
    base: int or float.
    exp: int >= 0
 
    returns: int or float, base^exp
    '''
    output = 1
    while exp > 0:
        output *= base
        exp -= 1
        
    return output


print(iterPower(2, 3))
print(iterPower(3, 2))
