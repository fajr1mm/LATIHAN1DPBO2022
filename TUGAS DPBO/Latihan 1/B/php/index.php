<?php
include "club.php";

$fill1 = new Club("Manchester United", "England", "1889", "Cristiano", "Ole");
$fill2 = new Club("Tottenham", "England", "1889", "Kane", "Mourinho");

echo "Club : ". $fill1->getName() ."<br>";
echo "Country : ". $fill1->getCountry() ."<br>";  
echo "Year : ". $fill1->getYear() ."<br>";
echo "Player : ". $fill1->getPlayer() ."<br>";
echo "Coach : ". $fill1->getCoach() ."<br>";

echo "<br>";

echo "Club : ". $fill2->getName() ."<br>";
echo "Country : ". $fill2->getCountry() ."<br>";
echo "Year : ". $fill2->getYear() ."<br>";
echo "Player : ". $fill2->getPlayer() ."<br>";
echo "Coach : ". $fill2->getCoach() ."<br>";

?>
