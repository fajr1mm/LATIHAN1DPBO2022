<?php

class Mahasiswa{
    private $NIM = 0;
    private $Nama = "";
    private $Gen = "";
    private $Prodi = "";
    private $Smt = 0;
    
    public function __construct($NIM = 0, $Nama = "", $Gen = "", $Prodi = "", $Smt = 0){
        $this->NIM = $NIM;
        $this->Nama = $Nama;
        $this->Gen = $Gen;
        $this->Prodi = $Prodi;
        $this->Smt = $Smt;
    }

    public function setNIM($NIM){
        $this->NIM = $NIM;
    }

    public function getNIM(){
        return $this->NIM;
    }

    public function setNama($Nama){
        $this->Nama = $Nama;
    }

    public function getNama(){
        return $this->Nama;
    }

    public function setGen($Gen){
        $this->Gen = $Gen;
    }

    public function getGen(){
        return $this->Gen;
    }

    public function setProdi($Prodi){
        $this->Prodi = $Prodi;
    }

    public function getProdi(){
        return $this->Prodi;
    }

    public function setSmt($Smt){
        $this->Smt = $Smt;
    }

    public function getSmt(){
        return $this->Smt;
    }
}
?>
