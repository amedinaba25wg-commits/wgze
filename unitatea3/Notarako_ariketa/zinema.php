<?php
require 'pelikula.php';
class Zinema {
    private $pelikulak;

    function __construct() {
        $this->pelikulak = array();
    }
    function getIsanArray() {
        $isanArray = array();
        foreach($this->pelikulak as $pelikula) {
            $isan = $pelikula->getIsan();
            $isanArray[] = $isan;
        }
        return $isanArray;
    }

    function getPelikulak() {
        return $this->pelikulak;
    }

    function gehituPelikula($pelikula) {
        $berria = true;
        $isanArray = $this->getIsanArray();
        $isan = $pelikula->getIsan();
        foreach($isanArray as $isan1) {
            if($isan == $isan1) {
                $berria = false;
            }
        }
        if($berria == true && strlen($isan) == 8) {
            $this->pelikulak[] = $pelikula;
            return true; //Isan ez da existitzen true bueltatzen du
        }
        else {
            return false; //Isan existitzen da false bueltatzen du
        }
    }
}
?>