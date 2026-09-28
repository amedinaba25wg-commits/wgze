<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Blokea 2 - Ariketa 8</h1>
    <h2>Enuntziatua</h2>
    <p>8.	Sortu funtzio bat config.php fitxategia existitzen den ikusteko. Ez bada existitzen  salbuespena bota.</p>
    <h2>Erantzuna</h2>
    <?php
        function existitzen_da_config() {
            if(file_exists("config.php")) {
                echo "Fitxategia config.php existitzen da.";
            }
            else {
                throw new Exception("Fitxategia config.php ez da existitzen.");
            }
        }
        existitzen_da_config();
    ?>
</body>
</html>