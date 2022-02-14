<?php

class Club{
    private $Name = "";
    private $Country = "";
    private $Year = "";
    private $Player = "";
    private $Coach = "";
    
    public function __construct($Name = "", $Country = "", $Year = "", $Player = "", $Coach = ""){
        $this->Name = $Name;
        $this->Country = $Country;
        $this->Year = $Year;
        $this->Player = $Player;
        $this->Coach = $Coach;
    }

    public function setName($Name){
        $this->Name = $Name;
    }

    public function getName(){
        return $this->Name;
    }

    public function setCountry($Country){
        $this->Country = $Country;
    }

    public function getCountry(){
        return $this->Country;
    }

    public function setYear($Year){
        $this->Year = $Year;
    }

    public function getYear(){
        return $this->Year;
    }

    public function setPlayer($Player){
        $this->Player = $Player;
    }

    public function getPlayer(){
        return $this->Player;
    }

    public function setCoach($Coach){
        $this->Coach = $Coach;
    }

    public function getCoach(){
        return $this->Coach;
    }
}  
?>
