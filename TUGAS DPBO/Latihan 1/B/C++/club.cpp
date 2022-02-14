#include <iostream>
#include <string>

using namespace std;

class club{
    private:
    string name;
    string country;
    string year;
    string player;
    string coach;

    public:
    club(){
        this->name = "";
        this->country = "";
        this->year = "";
        this->player = "";
        this->coach = "";
    }

    club(string name, string country, string year, string player, string coach){
        this->name = name;
        this->country = country;
        this->year = year;
        this->player = player;
        this->coach = coach;
    }

    void setName(string name){
        name = name;
    }

    void setCountry(string country){
        this->country = country;
    }

    void setYear(string year){
        this->year = year;
    }

    void setPlayer(string player){
        this->player = player;
    }

    void setCoach(string coach){
        this->coach = coach;
    }

    string getName(){
        return this->name;
    }

    string getCountry(){
        return this->country;
    }

    string getYear(){
        return this->year;
    }

    string getPlayer(){
        return this->player;
    }

    string getCoach(){
        return this->coach;
    }

    ~club(){}
};