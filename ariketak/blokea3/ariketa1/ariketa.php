<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blokea 3 - Ariketak</title>
</head>
<body>
    <h1>Blokea 3 - Ariketa 1</h1>
    <h2>Enuntziatua</h2>
    <p>Hasieratu behar diren aldagaien balioak ausazko balio mugatuarekin, kontuan hartuta adierazpena.</p>
    <p>Sortu korrikalari klase bat korrikalari bakoitzaren informazioa gordetzeko: izena, kodea (alfanumerikoa) eta parte hartu duten lasterketa bakoitzaren denborak (segundoetan) biltzen dituen array bat. Korrikalari bakoitzak ezin du 5 lasterketa baino gehiagotan parte hartu.</p>
    <p>Klaseak lasterketagehitu metodoa du. Lasterketaren zerrendari beste lasterketa bat gehitzen dio.</p>
    <p>Beste salbuespen bat bota behar duzu, baldin eta:</p>
    <ul>
        <li>Lasterketa bat 5 segundo baino gutxiagokoa da.</li>
        <li>Korrikalariak 5 lasterketa ditu.</li>
    </ul>
    <p>Txapelketa klasea sortu,non array asoziatibo batean gordeko dituen korrikalarien kodeak (alfanumerikoak) indize gisa eta korrikalariak balio gisa.</p>
    <p>Txapelketa klaseak korrikalariagehitu metodo bat du, korrikalari bat parametro bezala hartzen duena, eta arrayari gehitzen diona.</p>
    <p>Txapelketa klaseak gehitulasterketakorrikalariari metodo bat du korrikalari bati lasterketa bat gehitzeko. Korrikalariaren kodea eta denbora kontuan emanda, lasterketa dagokion korrikalariari gehitu behar zaio.</p>
    <p>kalkulatu hurrengoa:</p>
    <ul>
        <li>Korrikalari guztien batez besteko denbora 1. lasterketan.</li>
        <li>Korrikalari bizkorrena.</li>
        <li>Itzuli array bat 2 lasterketetan 15 segundu baino gehiago eman dituen korrikalarien izenekin.</li>
        <li>Itzuli arraun bat "e" letrarekin amaitzen den izena duten korrikalariekin.</li>
    </ul>
    <p>Klase bakoitza fitxategi banatan egon behar du. Sortu php fitxategi berri bat zure kodea egiaztatzeko.</p>
    <p>Aldagai guztiak pribatuak dira. Beharrezko get eta set metodoak erabili..</p>
    <h2>Erantzuna</h2>
    <?php
        include "korrikalaria.php";
        include "txapelketa.php";
        $txapelketa = new Txapelketa();
        $korrikalaria1 = new Korrikalaria("Sandra", 1);
        $korrikalaria2 = new Korrikalaria("henry", 2);
        $korrikalaria3 = new Korrikalaria("Oier", 3);
        $korrikalaria4 = new Korrikalaria("Meie", 4);
        $txapelketa->korrikalariaGehitu($korrikalaria1);
        $txapelketa->korrikalariaGehitu($korrikalaria2);
        $txapelketa->korrikalariaGehitu($korrikalaria3);
        $txapelketa->korrikalariaGehitu($korrikalaria4);
        $txapelketa->gehituLasterketaKorrikalariari(1, 20);
        $txapelketa->gehituLasterketaKorrikalariari(1, 10);
        $txapelketa->gehituLasterketaKorrikalariari(1, 11);
        $txapelketa->gehituLasterketaKorrikalariari(1, 9);
        $txapelketa->gehituLasterketaKorrikalariari(1, 8);
        $txapelketa->gehituLasterketaKorrikalariari(2, 10);
        $txapelketa->gehituLasterketaKorrikalariari(2, 10);
        $txapelketa->gehituLasterketaKorrikalariari(2, 6);
        $txapelketa->gehituLasterketaKorrikalariari(2, 14);
        $txapelketa->gehituLasterketaKorrikalariari(3, 10);
        $txapelketa->gehituLasterketaKorrikalariari(3, 10);
        $txapelketa->gehituLasterketaKorrikalariari(3, 9);
        $txapelketa->gehituLasterketaKorrikalariari(3, 11);
        $txapelketa->gehituLasterketaKorrikalariari(3, 10);
        $txapelketa->gehituLasterketaKorrikalariari(4, 12);
        $txapelketa->gehituLasterketaKorrikalariari(4, 7);
        $txapelketa->gehituLasterketaKorrikalariari(4, 8);
        $txapelketa->gehituLasterketaKorrikalariari(4, 8);


        echo "<h3>Korrikalarien batezbestekoa</h3>";
        echo "<table border='1'><tr><td>Korrikalaria</td><td>Batez besteko denbora</td></tr>";
        
        $korrikalariBizkorrena = $korrikalaria1; //Momentuz bat gero ya egiten zaio begiratzea nork den azkarragoa
        $korrikalariBizkorrenaBB = 4; //Batazbestekoa
        foreach($txapelketa->getZerrenda() as $korrikalaria) {
            $batezBestekoa = 0;
            $kontagailua = 0;
            //Begiratuko da ere bai zein den korrikalari bizkorrena:
            foreach($korrikalaria->getLasterketaDenborak() as $denbora) {
                $batezBestekoa += $denbora;
                $kontagailua++;
            }
            $batezBestekoa /= $kontagailua;
            if ($batezBestekoa < $korrikalariBizkorrenaBB || $korrikalariBizkorrenaBB == 4) {
                $korrikalariBizkorrena = $korrikalaria;
                $korrikalariBizkorrenaBB = $batezBestekoa;
            }
            echo "<tr><td>" . $korrikalaria->getIzena() ."</td><td>$batezBestekoa</td></tr>";
        }
        echo "</table>";

        
        $batezbestekoa1 = 0;
        $kontagailua = 0;
        foreach($txapelketa->getZerrenda() as $korrikalaria) {
            $lasterketakoDenborak = $korrikalaria->getLasterketaDenborak();
            $batezbestekoa1 += $lasterketakoDenborak[0];
            $kontagailua++;
        }
        $batezbestekoa1 /= $kontagailua;
        echo "<p>Batez besteko media lehenengo karreran: " . $batezbestekoa1 . "s-koa izan da</p>";

        echo "<h3>Korrikalari bizkorrena</h3>";
        echo "<p>Korrikalari bizkorrena " . $korrikalariBizkorrena->getIzena() . " da batezbestekoa kontuan edukita</p>.";

    ?>
</body>
</html>