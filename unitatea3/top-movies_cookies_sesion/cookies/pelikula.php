<?php
class Pelikula {
    private $izena;
    private $isan;
    private $urtea;
    private $puntuazioa;

    public function getIzena() {
        return $this->izena;
    }

    public function getIsan() {
        return $this->isan;
    }

    public function getUrtea() {
        return $this->urtea;
    }

    public function getPuntuazioa() {
        return $this->puntuazioa;
    }

    function __construct($izena, $isan, $urtea, $puntuazioa) {
        $this->izena = $izena;
        $this->isan = $isan;
        $this->urtea = $urtea;
        $this->puntuazioa = $puntuazioa;
    }
}
?>
