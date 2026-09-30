<?php
    class Korrikalaria {
        private $izena;
        private $kodea;
        private $lasterketaDenborak;
            
        function getLasterketaDenborak() {
            return $this->lasterketaDenborak;
        }
        function getKodea() {
            return $this->kodea;
        }
        function getIzena() {
            return $this->izena;
        }

        //Lasterketa gehitzeko
        function lasterketaGehitu($lasterketaDenbora) {
            if(sizeof($this->lasterketaDenborak) == 5) {
                throw new Exception("Ezin da gehitu lasterketaren denbora 5 lasterketa gehitu direlako");
            }
            elseif($lasterketaDenbora < 5) {
                throw new Exception("Ezin da gehitu lasterketa 5 segundo baino gutxiagokoa delako");
            }
            else {
                $this->lasterketaDenborak[] = $lasterketaDenbora;
            }
        }

        function __construct($izena, $kodea) {
            $this->izena = $izena;
            $this->kodea = $kodea;
            $this->lasterketaDenborak = array();
        }
    }
?>
