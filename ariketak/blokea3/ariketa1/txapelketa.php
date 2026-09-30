<?php
    class Txapelketa {
        private $zerrenda;
        function korrikalariaGehitu($korrikalaria) {
            $this->zerrenda[$korrikalaria->getKodea()] = $korrikalaria;
        }
        function gehituLasterketaKorrikalariari($kodea, $lasterketaDenbora) {
            $this->zerrenda[$kodea]->lasterketaGehitu($lasterketaDenbora);
        }
        function __construct() {
            $this->zerrenda = array();
        }    

        function getZerrenda() {
            return $this->zerrenda;
        }
    }
?>