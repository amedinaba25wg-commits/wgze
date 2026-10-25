<?php
require "funtzioak.php";
    $zinema = new Zinema();
    if(isset($_COOKIE['pelikulak'])) {
        $pelikulak = $_COOKIE['pelikulak'];
        foreach($pelikulak as $isan => $pelikula) {
            $filma = new Filma($pelikula['izena'], $pelikula['isan'], $pelikula['urtea'], $pelikula['puntuazioa']);
            $zinema->gehituFilma($filma);
        }
    }
    try {
        if(empty($_POST['izena']) && empty('isan') && empty('urtea')) {
            throw new Exception("Ez da ez urterik ez isan-ik ez izenik sartu");
        }
        else {
            $filma = new Filma($_POST['izena'], $_POST['isan'], $_POST['urtea'], $_POST['puntuazioa']);
            $zinema->gehituFilma($filma);
            setcookie('pelikulak[' . $filma->getIsan() . '][izena]', $filma->getIzena(), time() + 3600);
            setcookie('pelikulak[' . $filma->getIsan() . '][isan]', $filma->getIsan(), time() + 3600);
            setcookie('pelikulak[' . $filma->getIsan() . '][urtea]', $filma->getUrtea(),time() + 3600);
            setcookie('pelikulak[' . $filma->getIsan() . '][puntuazioa]', $filma->getPuntuazioa(), time() + 3600);
        }
    }
    catch(Exception $e) {
        echo "<script>alert('Errorea datuak betetzen: " . $e->getMessage() . "')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top-Movies Ariketa</title>
</head>
<body>
    <center><h1>Top movies Ariketa</h1>
    <?php
        echo taulaSortu($zinema);
    ?>
    <form method="Post" style="display: flex; flex-direction: column; align-content: left; width: 200px">
        <label for="izena">Izena: </label>
        <input type="text" name="izena" /><br>
        <label for="isan">ISAN: </label>
        <input type="text" name="isan" /><br>
        <label for="urtea">Urtea: </label>
        <input type="number" name="urtea" /><br>
        <label for="puntuazioa">Puntuazioa</label>
        <select name="puntuazioa">
            <option value="1">1/5</option>
            <option value="2">2/5</option>
            <option value="3">3/5</option>
            <option value="4">4/5</option>
            <option value="5">5/5</option>
        </select><br>
        <input type="submit" name="bidali" value="bidali" />
    </form>
    
</center>
</body>
</html>