import random
def printList(lst):
    for i in range(len(lst)):
        for j in range(len(lst[i])):
            print(lst[i][j],end='    ')
        print()

s=0
n=4
m=4
a=[]
for i in range(n):
    a.append([])
    for j in range(m):
        a[i].append(random.randint(10,20))
printList(a)
print()
cem=0
for i in range(len(a)):
    cem+=sum(a[i])
    siralicem=0
    for x in a[i]:
        siralicem+=x
    print('{} setirdeki elementlerin cemi {}'.format(i,siralicem))
print('Ümumi Cem: {}'.format(cem))
