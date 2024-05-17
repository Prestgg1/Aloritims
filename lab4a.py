import random
lst = [ ]
for i in range(10):
    number = random.randint(0, 101) 
    lst = lst + [number]
print("lst = ", lst)
f = open('file.txt', 'w')
s=str(len(lst))
f.write(s + '\n')
for i in lst:
    s = str(i) 
    f.write(s + ' ')
f.close()
f=open('file.txt','r+')
s=f.readline()
lst2=[ ]
for line in f:
    strs=line.split(' ')
    print('strs=',strs)
    for s in strs:
        if s!='':
            lst2=lst2+[int(s)]
print('lst2=',lst2)
b=[ ]
for x in lst2:
    if x%2!=0:
        b.append(x)
print('Tek ededler:',b)
s=str(len(b))
f.write(s+'\n')
for i in b:
    s=str(i)
    f.write(s+' ')
f.close()
