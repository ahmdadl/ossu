def oddTuples(aTup):
    '''
    aTup: a tuple
    
    returns: tuple, every other element of aTup. 
    '''
    output = (aTup[0],)
        
    i = 0
    for a in aTup:
        if i % 2 == 0:
            output = output + (a,)

        i += 1
        
    return output[1:]
    


print(oddTuples(('I', 'am', 'a', 'test', 'tuple')))