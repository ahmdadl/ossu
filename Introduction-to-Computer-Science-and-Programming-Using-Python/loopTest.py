a = [1, 2, 3, 4, 0]
b = [3, 0, 2, 4, 1]
c = [3, 2, 4, 1, 5]

def foo(L):
    val = L[0]
    # print(val)
    while (True):
        val = L[val]
        print(L[val])
        # break
        
foo(b)