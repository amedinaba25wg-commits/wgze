<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. Blokea - Ariketa 3</title>
</head>
<body>
    <h1>2. Blokea - Ariketa 3</h1>
    <h2>Enuntziatua</h2>
    <p>3.	Sortu 20 ausazko zenbakiko array bat, txikienetik handienera ordenatu eta adierazi:</p>
    <ul>
        <li>Zenbaki txikiena kolore urdinean</li>
        <li>Zenbaki handiena kolore gorrian</li>
        <li>Zenbakie batuketa eta media 2 hamartarrekin</li>
    </ul>
    <?php
        $zenbakiak = [];
        for ($i = 0; $i < 20; $i++) {
            $zenbakiak[] = rand(1, 100);
        }
        sort($zenbakiak);
        $txikiena = $zenbakiak[0];
        $handiena = $zenbakiak[count($zenbakiak) - 1];
        $batuketa = array_sum($zenbakiak);
        $media = $batuketa / count($zenbakiak);
    ?>
    <h2>Erantzuna</h2>
    <?php
        foreach ($zenbakiak as $zenbakia) {
            if ($zenbakia == $txikiena) {
                echo "<span style='color: blue;'>$zenbakia, </span>";
            }
            elseif ($zenbakia == $handiena) {
                echo "<span style='color: red;'>$zenbakia.</span>";
            }
            else {
                echo "$zenbakia, ";
            }
        }
    ?>
    <p>
        <Strong>Batuketa:</Strong>
        <?php echo number_format($batuketa, 2); ?>
    </p>
    <p>
        <strong>Media</strong>
        <?php echo number_format($media, 2); ?>
    </p>
</body>
</html>