<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.Blokea - Ariketa 2</title>
</head>
<body>
    <h1>Ariketa 2</h1>
    <p>2.	Sortu funtzio bat, non 2 zenbaki jasoko ditu parametro gisa eta HTML taula bat sortuko du, non lehen zenbakiaren errenkada kopurua eta bigarren zenbakiaren zutabe kopurua izango duen</p>
    <h2>Erantzuna</h2>
    <form>
        Errenkada kopurua: <input name="errenkadaKop" type="number" action="" method="GET">
        Zutabe kopurua: <input name="zutabeKop" type="number" action="" method="GET">
    </form>
    <?php
        $zutabeKop = $_GET['zutabeKop'];
        $errenkadaKop = $_GET['errenkadaKop'];
        $html_egitura = "<table>"
    ?>
</body>
</html>