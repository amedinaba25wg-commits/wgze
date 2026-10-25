<?php
require "filma.php";

class Zinema {
    private $filmak;

    public function getFilmak() {
        return $this->filmak;
    }

    public function __construct() {
        $this->filmak = [];
    }

    public function gehituFilma($filma) {
        try { //Filmarik ez badago oraindik filma gehituko da
            if(empty($this->filmak)) {
                $this->filmak[$filma->getIsan()] = $filma;
            }
            else {
                //Foreach honekin konparatuko du ea existitzen den film bat isan horrekin.
                foreach($this->filmak as $filma1) {
                    if($filma1->getIsan() == $filma->getIsan()) {
                        throw new Exception("Ya existitzen da film bat ISAN zenbaki horrekin");
                    }
                }
                $this->filmak[] = $filma;
            }
        }
        catch(Exception $e) { //Hemen lortuko dira errore guztiak filmak sortzerakoan
        //Bai erroreak existitzen bada hemen kudeatuta edo filmaren datuak gaizki badaude filma klasean kudeatuta.
            throw new Exception("Errorea Filma gehitzerakoan zinemara: " . $e->getMessage());
        }
    }

}
?>