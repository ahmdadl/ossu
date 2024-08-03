def gcdIter(a, b):
    '''
    a, b: positive integers
    
    returns: a positive integer, the greatest common divisor of a & b.
    '''
    gcp = 1
    for i in range(1, a+1):
        if a%i == 0 and b%i == 0:
            gcp = i

    return gcp

print(gcdIter(2, 12))
print(gcdIter(6, 12))
print(gcdIter(9, 12))
print(gcdIter(7, 12))