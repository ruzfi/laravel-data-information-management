#!/usr/bin/python
import os,sys,base64, string
letters_lower = string.ascii_lowercase
letters_upper = string.ascii_uppercase

shifted = []

def caesar(shift, inp):
    for x in inp:
        if x.strip() and x in letters_lower:
            shifted.append(letters_lower[(letters_lower.index(x) + shift) % 26])
        elif x.strip() and x in letters_upper:
            shifted.append(letters_upper[(letters_upper.index(x) + shift) % 26])
        else:
            shifted.append(x)
    return ''.join(shifted)

def header():
	os.system('clear')
	print('''
 _       _ ___  | String Tools
|_)   __|_o / ) | Just Simple Tools
| \|_|/_| |/ /_ | Written with Love
                | by Ruzfi72 | Github.com/Ruzfi72

You can use this directly using the usage below:

~ python stools.py {string} {options}
or with chmod +x on this script
~ ./stools.py {string} {options}
''')

def string():
	if len(sys.argv) == 1:
		string = str(raw_input('Input the string : '))
	else:
		string = sys.argv[1]
	return string

def process():
	l = ('''1. Reverse String
2. Sentence case
3. lower case
4. UPPER CASE
5. Base64 Decode
6. Base64 Encode
7. Base32 Decode
8. Base32 Encode
9. Shift Character
''')

	if len(sys.argv) == 1:
		print(l)
		options = str(raw_input('Select options number above : '))
	elif len(sys.argv) == 2:
		print(l)
		options = str(raw_input('Select options number above : '))
	else:
		options = sys.argv[2]

	if len(options) == 0:
		print('Please select one!')
	elif options == "1":
		print('Transformed Output : ' + string()[::-1])
	elif options == "2":
		print('Transformed Output : ' + string().capitalize())
	elif options == "3":
		print('Transformed Output : ' + string().lower())
	elif options == "4":
		print('Transformed Output : ' + string().upper())
	elif options == "5":
		try:
			print(base64.b64decode(string()))
		except TypeError:
			print("Something has wrong..Incorrect padding")
	elif options == "6":
		try:
			print(base64.b64encode(string()))
		except TypeError:
			print("Something has wrong..Incorrect padding")
	elif options == "7":
		try:
			print(base64.b32decode(string()))
		except TypeError:
			print("Something has wrong..Incorrect padding")
	elif options == "8":
		try:
			print(base64.b32encode(string()))
		except TypeError:
			print("Something has wrong..Incorrect padding")
	elif options == "9":
		try:
			shift = input("Shift Char: ")
			print(caesar(shift, string()))
		except:
			print("Something has wrong")
	else:
		print('Please enter available number above!')


if len(sys.argv) == 1:
	header()
	process()
else:
	process()
