def toChars(str):
    chars = ''
    for c in str:
        c = c.lower()
        if c == '' or c == ' ':
            continue
        chars += c

    return chars


# real method (recursive)
def isPalindrome(str):
    if str == '' or str == ' ':
        return True

    return str[0] == str[-1] and isPalindrome(str[1:-1])

# real method (loop)
def isPalindromeLooped(str):
    if str == '' or str == ' ':
        return True
    
    start = 0
    end = len(str) -1
    for i in range(start, end):
        if str[start] != str[end]:
            return False
        start += 1
        end -= 1

    return True



print(isPalindromeLooped(toChars('abCdef g h kl')))

print(isPalindromeLooped(toChars('')))

print(isPalindromeLooped(toChars("ablewasiereisawelba")))