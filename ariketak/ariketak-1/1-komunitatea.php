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
    </body>
</html>

