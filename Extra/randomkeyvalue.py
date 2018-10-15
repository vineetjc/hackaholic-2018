import random
import json

def randomkey():
	s = ""
	for a in xrange(6):
		s = s+chr(random.randint(97, 122))
	return s

def randomsent():
	s = ""
	y = random.randint(50,100)
	for a in xrange(y):
		v = random.randint(0,10)
		temp = chr(32) if v==0 else chr(random.randint(97,122))
		s=s+temp
	return s


D={}

values=[]

for i in xrange(50):
	x = randomkey()
	while True:
		y = randomsent()
		if y[0]==" ":
			continue
		else:
			break
	values.append(y)
	d = {x:y}
	D[x]=""
	#json_data = json.dumps(d, sort_keys=True, indent=4, separators=(',', ': '))
	with open("secret//"+x+".json", "w") as outfile:
		json.dump(d, outfile)
#json_data = json.dumps(D, sort_keys=True, indent=4, separators=(',', ': '))
with open("keys.json","w") as fout:
	json.dump(D, fout)

with open("values.txt", "w") as f_out:
	for sent in sorted(values):
		f_out.write(sent+", ")
