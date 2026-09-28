<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blokea 2 - Ariketa 6</title>
</head>
<body>
    <h1>Blokea 2 - Ariketa 6</h1>
    <h2>Enuntziatua</h2>
    <p>
        Urteko hilabete bakoitzeko, hilabetean jaioteguna duten pertsonen izenak gorde
        array batean. Sortu funtzio bat izen bat gehitzeko hilabete batean.
        Funtzio horrek, gainera, parametro batean itzuli behar du erregistratuta
        dauden pertsonen kopurua.
        <br>
        Urtarrila: Mikel, Ainara, Xabi<br>
        Otsaila: Irati, Ibai<br>
        Martxoa: Haiza<br>
        …
        <br>
        Arraya errekorritu, eta izen bakoitza banan-banan erakutsi.
        Erakutsi hilabeteen izenak beste kolore batean.
    </p>
    <h2>Erantzuna</h2>
    <?php
        $arr = [];

        $arr['Urtarrila'] = ['Alex', 'Aimar', 'Jesse'];
        $arr['Otsaila'] = ['Alara'];
        $arr['Apirila'] = ['Jokin', 'Samantha'];
        $arr['Uztaila'] = ['Paloma', 'Ernesto', 'Yiming', 'Maika'];
        $arr['Abendua'] = ['Diciembro', 'Curt', 'Drebot'];

    function gordePertsona(&$arr, $hilabetea, $pertsona) {
            $arr[$hilabetea][] = $pertsona;
            return count($arr[$hilabetea]);
        }
        $kopurua = gordePertsona($arr, "Martxoa", "Erika");
        echo "<h3>Hilabeteak eta izenak:</h3>";
        echo "<table border='1'>";
        foreach ($arr as $hilabetea => $pertsonak) {
            echo "<tr>";
            echo "<td style='color: blue;'><strong>$hilabetea</strong></td>";
        foreach ($pertsonak as $pertsona) {
            echo "<td>$pertsona</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        $totalPersonas = 0;
        foreach ($arr as $personas) {
            $totalPersonas += count($personas);
        }
        echo "<p><strong>Pertsona kopuru osoa:    $totalPersonas</strong></p>";
    ?>
</body>
</html>
