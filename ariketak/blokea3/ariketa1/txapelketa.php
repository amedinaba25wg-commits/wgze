<?php
    class Txapelketa {
        private $zerrenda;
        function korrikalariaGehitu($korrikalaria) {
            $zerrenda[$korrikalaria->getKodea()] = $korrikalaria;
        }
        function gehituLasterketaKorrikalariari($kodea, $lasterketaDenbora) {
            $zerrenda[$kodea]->lasterketaGehitu($lasterketaDenbora);
        }
        function __construct() {
            $this->zerrenda = new array();
        }    
    }
?>