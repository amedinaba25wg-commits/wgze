<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blokea 2 - Ariketa 10</title>
</head>
<body>
    <center><h1>Blokea 2 - Ariketa 10</h1></center>
    <h2>Enuntziatua</h2>
    <p>10.	Sortu klase bat izena, abizena eta NAN atributuekien. Atributuetarako dagozkion irakurketa eta idazketa metodoak sortu. Sortu metodo bat pertsonaren izen osoa itzultzeko “Pertsona: izena abizena!. Metodo eraikitzaile edo konstruktore bat ere sortu, hiru atributuak argumentu gisa hartzen dituena.</p>
    <p>Sortu User klasea, pertsonagandik heredatzen duena, eta gehitu Puntuak atributua. Getpuntos eta setPuntos metodoak barne hartzen ditu eta pertsonaren izen osoa itzultzen duen metodoa gainjartzen du: "Erabiltzailea: izena abizena".</p>
    <p>Gehitu metodo bat mezu bat adierazten duena erabiltzaileak 100 puntu baino gutxiago baditu.</p>
    <h2>Erantzuna</h2>
    <?php
        class Pertsona {
            private $izena;
            private $abizena;
            private $nan;
        
            //Getterak:
            function getIzena() {
                return $izena;
            }
            function getAbizena() {
                return $abizena;
            }
            function getNan() {
                return $nan;
            }

            //Setterrak:
            function setIzena($izena) {
                $this->izena = $izena;
            }
            function setAbizena($abizena) {
                $this->abizena = $abizena;
            }
            function setnan($nan) {
                $this->nan = $nan
            }

            //Izen osoa bueltatzen duena:
            function izenOsoa() {
                return "Pertsona: $izena $abizena!";
            }

            function __construct($izena, $abizena, $nan) {
                $this->izena = $izena;
                $this->abizena = $abizena;
                $this->nan = $nan;
            }
        }
        class User extends Pertsona {
            private $puntuak;

            //Getterra
            function getPuntuak() {
                return $puntuak;
            }
            //Setterra
            function setPuntuak($puntuak) {
                $this->puntuak = $puntuak;
            }

            //Gainjarri izenOsoa() funtzioa
            function izenOsoa() {
                return "Erabiltzilea: $izena $abizena";
            }

            //Erabiltzialeak ehun puntu baino gutxiago:
            function ehunGutxiago() {
                if ($puntuak < 100) {
                    return "Erabiltzaileak 100 puntu baino gutxiago ditu";
                }
            }
        }
    ?>
</body>
</html>