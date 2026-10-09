<?php
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

    function gehituPelikula() {

    }
}
?>