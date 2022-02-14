from club import club
n = int(input())

arr = [club() for i in range(n)]
i = 0

for i in range(n):
    # name, country, year, player, coach  = map(int, input().split())
    print("Input Name : ",end='')
    name = str(input())
    
    print("Input Country : ",end='')
    country = str(input())

    print("Input Year : ",end='')
    year = str(input())

    print("Input Player : ",end='')
    player = str(input())

    print("Input Coach : ",end='')
    coach = str(input())

    arr[i].setName(name)
    arr[i].setCountry(country)
    arr[i].setYear(year)
    arr[i].setPlayer(player)
    arr[i].setCoach(coach)

i = 0
for i in range(n):
    print()
    print("Club : ", str(arr[i].getName()))
    print("Country : ", str(arr[i].getCountry()))
    print("Year : ", str(arr[i].getYear()))
    print("Player : ", str(arr[i].getPlayer()))
    print("Coach : ", str(arr[i].getCoach()))