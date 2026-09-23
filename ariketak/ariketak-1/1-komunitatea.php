<?php// Ariketa 1: komunitatea:
/*
Solairu eta ate kopurua kontuan hartuta, egin ezazu komunitatean dauden etxeen zerrenda bat.
*/
?>

<html>
    <head>
        <title>Ariketak 1</title>
    </head>
    <body>
        <h1 style="text-align: center;">Ariketak 1</h1>
        <div class="ariketa ariketa1">
            <?php
                $pisu_kopurua = 5;
                $ate_pisu_bakoitzean = 12;
                echo "<h2>Ariketa 1</h2>";
                for ($i = 1; $i <= $pisu_kopurua; $i++) {
                    echo "<h3>$i . pisua</h3>";
                    echo "<ul>";
                    for($j = 1; $j <= $ate_pisu_bakoitzean; $j++) {
                        echo "<li>$j . atea</li>";
                    }
                    echo "</ul>";
                }
            ?>
        </div>
<?php
//Ariketa 2: Handiena
/*
Hiru zenbakitatik, erakutsi handiena.
nota: action ="" esan nahi du partekatzen duela
fitxategi berarekin ez kanpoko fitxategi batekin
*/

?>
        <div class="ariketa ariketa2">
            <h2>Ariketa 2</h2>
            <form action="" method="GET">
                zenbakia 1: <input type="number" name="ar2_zenbakia1"><br>
                zenbakia 2: <input type="number" name="ar2_zenbakia2"><br>
                zenbakia 3: <input type="number" name="ar2_zenbakia3"><br>
                <input type="submit">
            </form>
            <?php
                $handiena = 0;
                $zenbakia1 = $_GET["ar2_zenbakia1"];
                $zenbakia2 = $_GET["ar2_zenbakia2"];
                $zenbakia3 = $_GET["ar2_zenbakia3"];
                if ($zenbakia1 > $zenbakia2) {
                    $handiena = $zenbakia1;
                }
                else {
                    $handiena = $zenbakia2;
                }
                if($zenbakia3 > $handiena) {
                    $handiena = $zenbakia3;
                }

                echo "$handiena zenbakia hadiena da";
            ?>
        </div>
<?php
//Ariketa 3: Adin-tartea
/* Adin jakin bat emanda, dauden balioen tartea erakutsi, 0tik 100era.
Adibidez:
Emandako adina 26 bada, honakoa erakutsiko du: “20 eta 30 urteen tartean dago”
*/
?>
        <div class="ariketa ariketa3">
            <h2>Ariketa 3</h2>
            <form action="" method="GET">
                zenbakia 1: <input type="number" name="ar3_zenbakia1">
                <input type="submit">
            </form>
            <?php
                $ar3_zenbakia1 = $_GET["ar3_zenbakia1"];
                $tartea = 0;
                for ($i = 0; $i <= 100 && $i <= $ar3_zenbakia1; $i += 10) {
                    $tartea = $i;
                }
                echo '<p>' . $tartea . ' eta ' . $tartea + 10 . ' urteen tartean dago</p>';

            ?>
        </div>
<?php
//Ariketa 4: Palindromoa
/*
Hitz bat emanda, palindromoa den adierazi. Palindromoa ezkerretik eskuinera edo eskuinetik ezkerrera berdin irakurtzen den hitz edo esaldi bat da. */
?>
        <div class="ariketa ariketa4">
            <h2>Ariketa 4</h2>
            <form action="" method="GET">
                hitza = <input method="GET" action="" name="ar4_hitza">
                <input type="submit">
            </form>
            <?php
                $ar4_hitza = $_GET['ar4_hitza'];

                $array = str_split($ar4_hitza);
                $reverse_array = array();

                for ($i = 0; $i < count($array); $i++) {
                    $reverse_array[$i] = $array[count($array) - 1 - $i];
                }

                if ($reverse_array == $array) {
                    echo "<p>Hitza palindromoa da</p>";
                } else {
                    echo "<p>Hitza ez da palindromoa</p>";
                }
            ?>
        </div>
<?php
//Ariketa 5: Atrakzio parkea
/* 
Atrakzio parke baterako sarrera kontrolatu nahi da. 10 urtetik gorakoak edo 120 cm-tik gorakoak igo daitezke. Adingabea 'lagunduta' badoa, atrakziora igo ahal izango da 6 urte baino gehiago baditu, altuera edozein dela ere.
*/
?>
        <div class="ariketa ariketa5">
            <h2>Ariketa 5</h2>
        <form action="" method="GET">
            Adina (urteetan): <input type="number" method="GET" name="ar5_adina" action="">
            altuera (cm): <input type="number" method="GET" name="ar5_altuera" action="">
            Lagunduta (adingabeen kasuan): <input type="checkbox" name="ar5_lagunduta" method="GET">
            <input type="submit">
        </form>
            <?php
                $ar5_adina = $_GET["ar5_adina"];
                $ar5_altuera = $_GET["ar5_altuera"];
                $igo_daiteke = true;
                if($ar5_adina < 10 && $ar5_altuera < 120) {
                    $igo_daiteke = false;
                    $ar5_lagunduta = $_GET["ar5_lagunduta"];
                    if($ar5_lagunduta == true && $ar5_adina > 6) {
                        $igo_daiteke = true;
                    }
                }
                if($igo_daiteke) {
                    echo "<p>Pertsona hau igo daiteke</p>";
                }
                else {
                    echo "<p>Pertsona hau ezin da igo</p>";
                }
            ?>
        </div>
<?php
//Ariketa 6: Berreketak
/*
Berreketa eta kantitate bat emanda, erakutsi zenbakiak eta beraien berreketak, berreketa baino txikiagoa den bitartean.
Adibidez:
Potentzia:3 eta Kantitatea:100
1-1
2-8
3-27
4-64

*/
?>
        <div class="ariketa ariketa6">
            <h2>Ariketa 6</h2>
            <form action="" method="GET">
                Berreketaren potentzia: <input type="number" method="GET" action="" name="ar6_berretzailea">
                Zenbaki maximoa: <input type="number" method="GET" name="ar6_maximoa" action="">
                <input type="submit">
            </form>
            <?php
                $ar6_berretzailea = $_GET['ar6_berretzailea'];
                $ar6_maximoa = $_GET['ar6_maximoa'];
                $html_egitura = "<p>Berretzailea: $ar6_berretzailea <br>Maximoa: $ar6_maximoa</p><table>
                    <tr>
                        <td>Zenbakia</td>
                        <td>Berreketa</td>
                    </tr>";
                $zenbakia = 1;
                $emaitza = 1;
                while($emaitza <= $ar6_maximoa) {
                    $html_egitura = $html_egitura . "<tr><td>$zenbakia</td><td>$emaitza</td></tr>";
                    $zenbakia++;
                    $emaitza = $zenbakia;
                    for($i = 1; $i < $ar6_berretzailea; $i++) {
                        $emaitza *= $zenbakia;
                    }
                }
                $html_egitura = $html_egitura . "</table>";
                echo $html_egitura;
            ?>
        </div>
<?php
//Ariketa 7: Integer positiboa
/*
Ondorengo eragiketa inplementatu, edozein zenbaki oso positibori aplika dakiokeena:
a.	Zenbakia bikoitia bada, zati 2 egingo da.
b.	Zenbakia bakoitia bada, 3kin biderkatu eta gehitu 1.
	Bukaeran beti 1-koa lortuko da.
	Adibidea: 13, 40, 20, 10, 5, 16, 8, 4, 2, 1
*/
?>
        <div class="ariketa ariketa7">
            <h2>Ariketa 7</h2>
            <form>
                Zenbakia: <input type="number" action="" method="GET" name="ar7_zenbakia">
                <input type="submit">
            </form>
            <?php
                $zenbakia = -1;
                if(!empty($_GET['ar7_zenbakia'])) {
                    $zenbakia = $_GET['ar7_zenbakia'];
                    echo '<p>Sartutako zenbakia ' . $zenbakia . ' da.</p>';
                    $html_egitura = "<p>Emaitza: $zenbakia";
                    while($zenbakia != 1) {
                        if($zenbakia % 2 == 0) {
                            $zenbakia /= 2;
                        }
                        else {
                            $zenbakia *= 3;
                            $zenbakia++;
                        }
                        $html_egitura = $html_egitura . ', ' . $zenbakia;
                    }
                    $html_egitura = $html_egitura . "</p>";
                    echo $html_egitura;
                }
            ?>
        </div>
<?php
//Ariketa 8: Piramidea
/*
Ondorengo kodea inplementatu non, bakoitia izan behar duen “oinarri”zko aldagai bat emanik, ondorengo irudia inprimatuko duen:
    *
   ***
  *****
 *******

*/
?>
        <div class="ariketa ariketa8">
            <h2>Ariketa 8</h2>
            <form>
                Zenbakia: <input type="number" action="" method="GET" name="ar8_zenbakia">
                <input type="submit">
            </form>
            <?php
                if(!empty($_GET['ar8_zenbakia'])) {
                    $ar8_zenbakia = $_GET['ar8_zenbakia'];
                    if($ar8_zenbakia % 2 == 0) {
                        echo "<p>Sartutako zenbakia bikoitia da, bakoitia izan behar da piramidea egiteko</p>";
                    }
                    else {
                        $html_egitura = "<pre>";
                        for($i = 1; $i <= $ar8_zenbakia; $i += 2) {
                            $hutsuneak = ($ar8_zenbakia - $i)/2;
                            for($j = 1; $j <= $hutsuneak; $j++) {
                                $html_egitura = $html_egitura . " ";
                            }
                            for($j = 1; $j <= $i; $j++) {
                                $html_egitura = $html_egitura . "*";
                            }
                            $html_egitura = $html_egitura . "<br>";
                        }
                        $html_egitura = $html_egitura . "</pre>";
                        echo $html_egitura;
                    }
                }
            ?>
        </div>
<?php
//Ariketa 9: Komisioa
/*
Saltzaile baten komisioa kalkulatu nahi dugu. Komisioa salmenten zenbatekoa gehi salmenten zenbatekoan oinarritzen den ehunekoa da. 10.000 €baino gutxiago saldu badituzu, % 5 da, % 8 10.000 eta 20.000 artean, % 10 20.000 eta 40.000 artean eta % 13 40.000 baino gehiago. 
*/
?>
        <div class="ariketa ariketa9">
            <h2>Ariketa 9</h2>
            <form>
                Salmentak(€): <input type="number" action="" method="GET" name="ar9_salmentak">
                <input type="submit">
            </form>
            <?php
                if(!empty($_GET['ar9_salmentak'])) {
                    $ar9_salmentak = $_GET['ar9_salmentak'];
                    $komisioa = 0;
                    if($ar9_salmentak < 10000) {
                        $komisioa = $ar9_salmentak * 1.05;
                    }
                    elseif ($ar9_salmentak < 20000) {
                        $komisioa = $ar9_salmentak * 1.08;
                    }
                    elseif($ar9_salmentak < 40000) {
                        $komisioa = $ar9_salmentak * 1.1;
                    }
                    else {
                        $komisioa = $ar9_salmentak * 1.13;
                    }
                    $html_egitura = "<p>Salmentak " . $ar9_salmentak . "€ izan dirak, komisioak kalkulatuta: " . $komisioa . "€-ko komisioa izan da.</p>";
                    echo $html_egitura;
                }
            ?>
        </div>
<?php
//Ariketa 10: Online denda
/*
Datu hauek ditugu:
●	Erosketa-saskiaren zenbatekoa $guztira-erosketa, zenbakia bi hamartarrekin.
●	$erosketa-mota aldagaiak "maskotak" edo "jantziak" eduki ditzake.

Idatzi beharrezko kodea aplikatzeko:

Bezeroaren erosketa 19 euro baino txikiagoa bada:
●	Produktuak maskotenak badira, mezu bat agertuko da: “-ezin bidali. "
●	Produktuak jantziak badira, mezu hau agertuko da: "Bidalketa gastuak 9 euro dira".

Erosketak 19 eta 40 euro arteko zenbatekoa badu, mezua adieraziko da: "Bidalketa gastuak 9 euro dira".
Erosketa 80 eurotik gorakoa bada, bidalketa gastuak doakoak direla adierazi behar dugu.

Erakutsi erosketaren azken prezioa, kontuan hartuta % 10 BEZ gehitu behar zaiola maskotei buruzkoa bada, eta % 21 jantziei buruzkoa bada.
*/
?>
        <div class="ariketa ariketa10">
            <h2>Ariketa 10</h2>
            <form>
                Erosketa-saskiaren zenbatekoa: <input type="number" method="" action="GET" name="guztira-erosketa"><br>
                <label for="mota">Mota:</label>
                    <select name="erosketa-mota" id="erosketa-mota">
                        <option value="maskotak">maskotak</option>
                        <option value="jantziak">jantziak</option>
                    </select>
                <input type="submit">
            </form>
            <?php
                if(!empty($_GET['guztira-erosketa'])) {
                    $guztira_erosketa = $_GET['guztira-erosketa'];
                    $erosketa_mota = $_GET['erosketa-mota'];
                    $html_egitura = "";
                    if($guztira_erosketa < 19) {
                        $html_egitura = match($erosketa_mota) {
                            "maskotak" => "<p>Ezin bidali</p>",
                            "jantziak" => "<p>Bidalketa gastuak 9 euro dira",
                        };
                    }
                    elseif($guztira_erosketa < 40) {
                        
                    }
                    else {

                    }
                    echo $html_egitura;
                }
            ?>
        </div>
    </body>
</html>

