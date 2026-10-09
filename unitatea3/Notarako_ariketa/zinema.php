<?php
require 'pelikula.php';
class zinema {
    private $pelikulak;

    function __construct() {
        $pelikulak = array();
    }
    function getIsanArray() {
        $isanArray = array();
        foreach($this->pelikulak as $pelikula) {
            $isan = $pelikula.getIsan();
            $isanArray[] = $isan;
        }
        return $isanArray;
    }

    function gehituPelikula($pelikula) {
        $berria = true;
        $isanArray = $this->getIsanArray();
        $isan = $pelikula.getIsan();
        foreach($isanArray as $isan1) {
            if($isan == $isan1) {
                $berria = false;
            }
        }
        if($berria == true && $isan.length == 8) {
            $this->pelikulak[] = $pelikula;
            return true; //Isan ez da existitzen true bueltatzen du
        }
        else {
            return false; //Isan existitzen da false bueltatzen du
        }
    }
}
?>