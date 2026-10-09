<?php
class pelikula {
    private $izena;
    private $isan;
    private $urtea;
    private $puntuazioa;

    public function getIzena() {
        return $izena;
    }
    public function getIsan() {
        return $isan;
    }
    public function getUrtea() {
        return $urtea;
    }
    public function getPuntuazioa() {
        return $puntuazioa;
    }

    function __construct($izena, $isan, $urtea, $puntuazioa) {
        $this->izena = $izena;
        $this->isan = $isan;
        $this->urtea = $urtea;
        $this->puntuazioa = $puntuazioa;
    }
}
?>