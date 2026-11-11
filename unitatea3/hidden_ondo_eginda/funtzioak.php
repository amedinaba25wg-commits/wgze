<?php
require "zinema.php";
//Hemen funtzioak gestionatu egingo dira

function bilatuFilma($zinema, $izena) {
    $pelikulak = $zinema->getFilmak();
    $filtratutako_pelikulak = [];
    $zinema = new Zinema;
    foreach($pelikulak as $pelikula1) {
        if(str_contains($pelikula1->getIzena().toLowerCase(), $izena)) {
            $zinema->gehituFilma($pelikula1);
        }
    }
    return $zinema;
}

//Funtzio honek zinema objektu bat sortuko du eta jadanik dagoen informazioa gordeko du
function zinemaSortu() {
    $zinema = new Zinema();
    if(isset($_POST['kontagailua']) && $_POST['kontagailua'] != 0) {
    $izenak = $_POST['izenak'];
    $isanak = $_POST['isanak'];
    $urteak = $_POST['urteak'];
    $puntuazioak = $_POST['puntuazioak'];
    for($i = 0; $i < count($izenak); $i++) {
        $filma = new Filma($izenak[$i], $isanak[$i], $urteak[$i], $puntuazioak[$i]);
        $zinema->gehituFilma($filma);
    }
    }
    return $zinema;
}

//taula bat sortu zinemako filmekin
function taulaSortu($zinema) {
    $html_egitura = "<table><tr><th>Izena</th><th>Isan</th><th>Urtea</th><th>Puntuazioa</th></tr>";
    foreach($zinema->getFilmak() as $filma) {
        $html_egitura = $html_egitura . "<tr><td>" . $filma->getIzena() . "</td><td>"
        . $filma->getIsan() . "</td><td>" . $filma->getUrtea() . "</td><td>" . $filma->getPuntuazioa()
        . "</td></tr>";
    }
    return $html_egitura;
}

//Sortuko ditu hidden objektuak $zinema objektuaren bitarteze parametro bezala sartuta
function hiddenSortu($zinema) {
    $html_egitura = "";
    $kontagailua = 0;
    foreach($zinema->getFilmak() as $filma) {
        //Izena array-ean gorde
        $html_egitura = $html_egitura . '<input type="hidden" name="izenak['
        . $kontagailua . ']" value="' . $filma->getIzena() . '" />';

        //isan zenbakia arrayan gorde
        $html_egitura = $html_egitura . '<input type="hidden" name="isanak['
        . $kontagailua . ']" value="' . $filma->getIsan() . '" />';
        
        //urtea arrayan gorde
        $html_egitura = $html_egitura . '<input type="hidden" name="urteak['
        . $kontagailua . ']" value="' . $filma->getUrtea() . '" />';

        //puntuazioa arrayan gorde
        $html_egitura = $html_egitura . '<input type="hidden" name="puntuazioak['
        . $kontagailua . ']" value="' . $filma->getPuntuazioa() . '" />';

        //Kontagailuak igotzea hurrengo filma hidden bezala gordeko du:
        $kontagailua++;
    }
    $html_egitura .= "</table>";
    $kontagailua_html = '<input type="hidden" name="kontagailua" value="' . $kontagailua . '" />';
    $html_egitura .= '<input type="hidden" name="kontagailua" value="' . $kontagailua . '">';
    return $html_egitura;
}
?>
