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
            if(empty($this->filmak)) {
                $this->filmak[$filma->getIsan()] = $filma;
            }
            else {
                $existitzenDa = FALSE;
                //Foreach honekin konparatuko du ea existitzen den film bat isan horrekin.
                foreach($this->filmak as $filma1) {
                    if($filma1->getIsan() == $filma->getIsan()) {
                        //Filma eguneratuko da existitzen bada
                        $this->ezabatufilma($filma->getIsan());
                       $this->filmak[$filma->getIsan()] = $filma;
                       $existitzenDa = TRUE;
                    }
                }
                if(!$existitzenDa) {
                    $this->filmak[] = $filma;
                }
            }
    }
    public function ezabatuFilma($isan) {
        $this->filmak = array_values(array_filter($this->filmak, function($filma) use ($isan) {
            return $filma->getIsan() != $isan;
        }));
    }
}
?>