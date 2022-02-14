<?php
include "mahasiswa.php";

$fill1 = new Mahasiswa(2009575, "Galang", "Cowok", "ILMU KOMPUTER", 4);
$fill2 = new Mahasiswa(2007571, "Ulfa", "Cewek", "ILMU KOMPUTER", 4);

echo "NIM : ". $fill1->getNIM() ."<br>";
echo "Nama : ". $fill1->getNama() ."<br>";  
echo "Gen : ". $fill1->getGen() ."<br>";
echo "Prodi : ". $fill1->getProdi() ."<br>";
echo "Smt : ". $fill1->getSmt() ."<br>";

echo "<br>";

echo "NIM : ". $fill2->getNIM() ."<br>";
echo "Nama : ". $fill2->getNama() ."<br>";
echo "Gen : ". $fill2->getGen() ."<br>";
echo "Prodi : ". $fill2->getProdi() ."<br>";
echo "Smt : ". $fill2->getSmt() ."<br>";

?>
