def isPrime(n, primes):
    for p in primes:
        if n  % p  == 0:
            return False
    return True

def getPrimes():
    primes = []
    current = 2 # start from 2
    
    while True:
        if isPrime(current, primes):
            primes.append(current)
            yield current
        
        current += 1
        
primeGenerator = getPrimes()
        

print(next(primeGenerator))
print(next(primeGenerator))
print(next(primeGenerator))
print(next(primeGenerator))
print(next(primeGenerator))
    
    