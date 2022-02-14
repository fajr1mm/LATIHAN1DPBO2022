class club():

    __name = ""
    __country = ""
    __year = ""
    __player = ""
    __coach = ""

    def __init__(self, name = "", country = "", year = "", player = "", coach = ""):
        self.__name = name
        self.__country = country
        self.__year = year
        self.__player = player
        self.__coach = coach

    def setName(self, name):
        self.__name = name

    def setCountry(self, country):
        self.__country = country

    def setYear(self, year):
        self.__year = year

    def setPlayer(self, player):
        self.__player = player

    def setCoach(self, coach):
        self.__coach = coach

    def getName(self):
        return self.__name

    def getCountry(self):
        return self.__country

    def getYear(self):
        return self.__year

    def getPlayer(self):
        return self.__player

    def getCoach(self):
        return self.__coach 