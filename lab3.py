import random
def printList(lst):
    for i in range(len(lst)):
        for j in range(len(lst[i])):
            print(lst[i][j],end='    ')
        print()

p=1
n=4
m=4
a=[]
for i in range(n):
    a.append([])
    for j in range(m):
        a[i].append(random.randint(2,6))
printList(a)
print()
kvadratcem=0
for x in range(len(a)):
  if x%2!=0:
    for j in a[x]:
      kvadratcem+=j**2
print('kvadratcem=',kvadratcem)
