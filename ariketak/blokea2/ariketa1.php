<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. Blokea Ariketa 1</title>
</head>
<body>
    <h1>Ariketa 1</h1>
    <p>1.	Idatz ezazu bi multzo sortzeko beharrezko kodea: lehen 10 zenbaki naturalak (0tik hasita) lehen lerroan gordetzen dira. Bigarrenean, lehen lerroaren posizio berean dagoen zenbakiaren faktoriala gordetzen dugu. </p>
    <h2>Erantzuna</h2>
    <?php
        $arraya = array();
        $html_egitura = '<center><table border="1px"><tr><td>Zenbakia</td>';
        for($i = 0; $i < 10; $i++) {
            $html_egitura = $html_egitura . "<td><center>" . $i . "</center></td>";
        }
        $html_egitura = $html_egitura . "</tr><tr><td>Faktoriala</td>";
        for($i = 0; $i < 10; $i++) {
            $faktorial_array = array();
            $faktoriala = 1;
            for($j = $i; $j >= 1 || ($i == 0 && $j == 0); $j--) {
                $faktoriala *= $j;
                $faktorial_array[] = $j;
            }
            $html_egitura = $html_egitura . "<td>" . $i . "! = ";
            for($j = sizeof($faktorial_array); $j > 0; $j--) {
                $html_egitura = $html_egitura . $j;
                if($j != 1) {
                    $html_egitura = $html_egitura . " x ";
                }
                else {
                    $html_egitura = $html_egitura . " = ";
                }
            }
            $html_egitura = $html_egitura . "<strong>" . $faktoriala . "</strong>" . "</td>";
        }
        echo $html_egitura;
    ?>
</body>
</html>