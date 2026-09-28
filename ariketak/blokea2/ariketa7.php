<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blokea 2 - Ariketa 7</title>
</head>
<body>
    <h1>Blokea 2 - Ariketa 7</h1>
    <h2>Enuntziatua</h2>
    <p>7.	Idatzi funtzio bat berreketak kalkulatzeko. Argumentu gisa oinarria eta berredura hartzen ditu, hau aukerazkoa izanik eta defektuz 2 izanik (karratua).</p>
    <h2>Erantzuna</h2>
    <?php
        function berreketa_kalkulatu($oinarria, $berredura=2) : int {
            return $oinarria ** $berredura;
        }
        echo berreketa_kalkulatu(5, 4) . ", ";
        echo berreketa_kalkulatu(11);
    ?>
</body>
</html>