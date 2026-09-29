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
        $korrikalaria4 = new Korrikalaria("Mei", 4);
    ?>
</body>
</html>