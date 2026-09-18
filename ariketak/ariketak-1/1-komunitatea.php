<?php// Ariketa 1: komunitatea:
/*
Solairu eta ate kopurua kontuan hartuta, egin ezazu komunitatean dauden etxeen zerrenda bat.
*/
?>

<html>
    <head>
        <title>Ariketa 1</title>
    </head>
    <body>
        <div class="ariketa ariketa1">
            <?php
                $pisu_kopurua = 5;
                $ate_pisu_bakoitzean = 12;
                echo "<h1>Ariketa 1</h1>";
                for ($i = 1; $i <= $pisu_kopurua; $i++) {
                    echo "<h2>$i . pisua</h2>";
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
    </body>
</html>
<?php

