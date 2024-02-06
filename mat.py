import matplotlib.pyplot as  plt
x=['seenu','surya','sundhar','lakshmanan','prithvi']
y=[90,91,72,93,94]

ax=plt.scatter(x,y)
print(plt.xlabel('student'))
print(plt.ylabel('mark'))
plt.show()