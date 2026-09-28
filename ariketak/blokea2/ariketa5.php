<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blokea 2 - Ariketa 5</title>
</head>
<body>
    <h1>Blokea 2 - Ariketa 5</h1>
    <h2>Enuntziatua</h2>
    <p>5.	Sortu array bat urteko hilabeteekin eta hilabete bakoitzeko egun kopurua ezarri balio gisa.</p>
    <table>
        <tr>
            <td>Índice</td>
            <td>Enero</td>
            <td>Febrero</td>
        </tr>
        <tr>
            <td>Valor</td>
            <td>31</td>
            <td>28</td>
        </tr>
    </table>
    <?php
        $arr = [];
        $arr["Urtarrila"] = 31;
        $arr["Otsaila"] = 28;
        $arr["Martxoa"] = 31;
        $arr["Apirila"] = 30;
        $arr["Maiatza"] = 31;
        $arr["Ekaina"] = 30;
        $arr["Uztaila"] = 31;
        $arr["Abuztua"] = 31;
        $arr["Iraila"] = 30;
        $arr["Urria"] = 31;
        $arr["Azaroa"] = 30;
        $arr["Abendua"] = 31;
        echo '<table border="1"><tr><td>Indizea</td>';
        foreach($arr as $indizea => $balioa) {
            echo "<td>$indizea</td>";
        }
        echo "</tr><tr><td>Balioa</td>";
        foreach($arr as $balioa) {
            echo "<td>$balioa</td>";
        }
        echo "</tr></table>";
    ?>
</body>
</html>