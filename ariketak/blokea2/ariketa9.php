<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blokea 2 - Ariketa 9</title>
</head>
<body>
    <h1>Blokea 2 - Ariketa 9</h1>
    <h2>Enuntziatua</h2>
    <p>9.	Funtzio bat sortu, alde bat emanda, lauki baten eremua kalkulatzen duena. Aldea negatiboa bada salbuespena bota beharko duzu. Sortu bost ausazko zenbaki dituen array bat (ziurtatu arrayak zenbaki negatiboa bat duela) eta exekutatu funtzioa arrayaren elementu bakoitzean.</p>
    <h2>Erantzuna</h2>
    <?php
        //Funtzioa sortzen dugu:
        function eremuaKalkulatu($aldea) {
            if($aldea <= 0) {
                throw new Exception("Sartutako zenbakia 0 edo negatiboa da");
            }
            return $aldea ** 2;
        }
        echo "<p>Zenbait zenbaki ausaz sortuko dira</p>";
        $ausazko_zenbakiak = [];
        $negatiboaDu = false;
        while(!$negatiboaDu) {
            for($i = 0; $i < 5; $i++) {
                $ausazko_zenbakia = rand(-15, 15);
                $ausazko_zenbakiak[$i] = $ausazko_zenbakia;
                if($ausazko_zenbakia < 0) {
                    $negatiboaDu = true;
                }
            }
        }
        echo "<p>Hauek dira ausaz sortutako zenbakiak:</p>";
        echo "<ul>";
        foreach($ausazko_zenbakiak as $zenbakia) {
            echo "<li>" . $zenbakia . "</li>";
        }
        echo "</ul>";
        echo "<table border='1'><tr><td>Ausaz sortutako zenbakia</td><td>Funtzioa erabiltzearen emaitza</td></tr>";
        foreach($ausazko_zenbakiak as $zenbakia) {
            try {
                echo "<tr><td>$zenbakia</td><td>" . eremuaKalkulatu($zenbakia) . "</td></tr>";
            }
            catch(Exception $e) {
                echo '<tr>
                    <td>$zenbakia</td>
                    <td><span style="color:red">' . $e->getMessage() . "</span></td>
                  </tr>";
            }
        }
        echo "</table>";
    ?>
</body>
</html>