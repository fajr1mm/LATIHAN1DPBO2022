public class club {
    private String name;
    private String country;
    private String year;
    private String player;
    private String coach; 

    public club(String name, String country, String year, String player, String coach){
        this.name = name;
        this.country = country;
        this.year = year;
        this.player = player;
        this.coach = coach;
    }

    //methode setter
    public void setName(String name){
        this.name = name;
    }

    public void setCountry(String country){
        this.country = country;
    }

    public void setYear(String year){
        this.year = year;
    }

    public void setPlayer(String player){
        this.player = player;
    }

    public void setCoach(String coach){
        this.coach = coach;
    }


    public String getName(){
        return name;
    }

    public String getCountry(){
        return country;
    }

    public String getYear(){
        return year;
    }

    public String getPlayer(){
        return player;
    }

    public String getCoach(){
        return coach;
    }
}
