#include <bits\stdc++.h>
#include "club.cpp"

using namespace std;

int main(){
    int n=0;
    cin >> n;
    club arr[n];

    int i=0;
    string name, year, country, player, coach;
    for(i=0; i<n; i++){
        cout << "Input Club : ";
        cin >> name;

        cout << "Input Year : ";
        cin >> year;

        cout << "Input Country : ";
        cin >> country;

        cout << "Input player : ";
        cin >> player;

        cout << "Input Coach : ";
        cin >> coach;

        arr[i].setName(name);
        arr[i].setYear(year);
        arr[i].setCountry(country);
        arr[i].setPlayer(player);
        arr[i].setCoach(coach);

        arr[i] = club(name,year,country,player,coach);
    }

    for(i=0; i<n; i++){
        cout << endl << "Club : " << arr[i].getName() << endl;
        cout << "Year : " << arr[i].getYear() << endl;
        cout << "Country : " << arr[i].getCountry() << endl;
        cout << "Player : " << arr[i].getPlayer() << endl;
        cout << "Coach : " << arr[i].getCoach() << endl;
    }

    return 0;
}