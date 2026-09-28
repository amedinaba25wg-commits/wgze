<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.Blokea - Ariketa 2</title>
</head>
<body>
    <h1>Ariketa 2</h1>
    <p>
        Sortu funtzio bat, non 2 zenbaki jasoko ditu parametro gisa eta
        HTML taula bat sortuko du, non lehen zenbakiaren errenkada kopurua
        eta bigarren zenbakiaren zutabe kopurua izango duen.
    </p>
    <h2>Erantzuna</h2>
    <form action="" method="GET">
        Errenkada kopurua:
        <input name="errenkadaKop" type="number" min="1">
        Zutabe kopurua:
        <input name="zutabeKop" type="number" min="1">
        <input type="submit" value="Sortu taula">
    </form>

    <?php
        function taulaSortu($errenkadaKop, $zutabeKop) {
            $html_egitura = "<table border='1'>";
            for ($i = 0; $i < $errenkadaKop; $i++) {
                $html_egitura .= "<tr>";
                for ($j = 0; $j < $zutabeKop; $j++) {
                    $html_egitura .= "<td> " . $i * $zutabeKop + $j . "</td>";
                }
                $html_egitura .= "</tr>";
            }
            $html_egitura .= "</table>";
            return $html_egitura;
        }
        if (isset($_GET['errenkadaKop']) && isset($_GET['zutabeKop'])) {
            $errenkadaKop = $_GET['errenkadaKop'];
            $zutabeKop = $_GET['zutabeKop'];
            echo taulaSortu($errenkadaKop, $zutabeKop);
        }
    ?>
</body>
</html>
