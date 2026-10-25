<?php
//Filma objektua sortzeko klasea
class Filma {
    private $izena;
    private $isan;
    private $urtea;
    private $puntuazioa;

    //getterrak:
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
    
    //Konstruktorea sortu filma objektua sortzeko, eskatzen zaio informazio guztia.
    public function __construct($izena, $isan, $urtea, $puntuazioa) {
        //filma sortuko da
        try {
            if($urtea < 1888) {
                throw new Exception("Ez dago erregistrorik 1888 urtetik baino lehenagoko pelikulak existitzen direnik");
            }
            if($urtea > 2026) {
                throw new Exception("Etorkizuneko filmak ezin dira gehitu :(");
            }
            if(strlen($isan) != 8) {
                throw new Exception("Isan zenbakia 8 digitu izan beharko lituzke");
            }
            else {
                $this->izena = $izena;
                $this->isan = $isan;
                $this->urtea = $urtea;
                $this->puntuazioa = $puntuazioa;
            }
        }
        catch(Exception $e) {
            throw new Exception("Errorea filma sortzerakoan: " . $e->getMessage());
        }
    }
}
?>