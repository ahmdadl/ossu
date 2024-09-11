def applyToEach(li, f):
    for i in range(len(li)):
        li[i] = f(li[i])
        
    return li

def divideByFive(num):
    return abs(num) // 5

print(applyToEach([5, -20, 40, -45], divideByFive))