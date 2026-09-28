<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blokea 2 - Ariketa 4</title>
</head>
<body>
    <h1>Blokea 2 - Ariketa 4</h1>
    <h2>Enuntziatua</h2>
    <p>4.	5 hitzekin osatutako string bat emanda (adibidez $str = "apple pear lemon watermelon melon"), pasatu array asoziatibo batera non hitza izango den bere indizea eta luzera bere balio izango dena.</p>
    <?php
        $frasea = "Apple pear lemon watermelon melon";
        $hitzak = explode(" ", $frasea);
        $emaitza = [];
        foreach($hitzak as $hitza) {
            $emaitza[$hitza] = strlen($hitza);
        }
        print_r($emaitza);
    ?>
</body>
</html>