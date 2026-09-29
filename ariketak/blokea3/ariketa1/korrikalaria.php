<?php
    class Korrikalaria {
        private $izena;
        private $kodea;
        private $lasterketaDenborak;
            
        function getLasterketaDonborak() {
            return $lasterketaDenborak;
        }
        function getKodea() {
            return $kodea;
        }

        //Lasterketa gehitzeko
        function lasterketaGehitu($lasterketaDenbora) {
            if(sizeof($lasterketaDenborak) == 5) {
                throw new Exception("Ezin da gehitu lasterketaren denbora 5 lasterketa gehitu direlako");
            }
            elseif($lasterketaDenbora < 5) {
                throw new Exception("Ezin da gehitu lasterketa 5 segundo baino gutxiagokoa delako");
            }
            else {
                $lasterketaDenborak[] = $lasterketaDenbora;
            }
        }

        function __construct($izena, $kodea) {
            $this->izena = $izena;
            $this->kodea = $kodea;
            $this->getLasterketaDonborak = new array();
        }
    }
?>
