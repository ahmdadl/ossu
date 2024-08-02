print('please think on a number between 0 and 100: ')

low = 0
high = 100
guess = (low + high) // 2

choice = 'k'

while choice != 'c':
    if (guess <= 1):
        print('so your number is 1')
        break

    if choice == 'h':
        high = guess
        guess = (low + high) // 2
    elif choice == 'l':
        low = guess
        guess = (low + high) // 2
    else:
        print('I couldn\'t understand your choice.')
        
    choice = input('\nis this you number ' + str(guess) + '?\nEnter "h" to indicate the guess is too high. Enter "l" to indicate the guess is too low. Enter "c" to indicate I guessed correctly.')

if (choice == 'c'):
    print('\nGame over. Your secret number was: ' + str(guess))
        