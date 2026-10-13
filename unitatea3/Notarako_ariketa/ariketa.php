<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa - Top Movies</title>
</head>
<body>
    <center><h1>Ariketa - Top Movies</h1></center>

    <div id="filmak">
        <?php
            require 'zinema.php';
            $zinema = new Zinema;

            $izenak = $_POST['izenak'] ?? [];
            $isanak = $_POST['isanak'] ?? [];
            $urteak = $_POST['urteak'] ?? [];

            if (isset($_POST['gehitu']) && !empty(trim($_POST['izena'] ?? ''))) {
                $izenak[] = trim($_POST['izena']);
                //$isanak[] = trim($_POST['isan']);
                //$urteak[] = trim($_POST['urtea']);
                //$puntuazioa[] = trim($_POST['puntuazioa']);
            }

            echo '<table border="1px solid black"><th><td>Izena</td><td>ISAN</td><td>Urtea</td><td>Puntuazioa</td></th>';
            foreach ($izenak as $izena) {
                echo "<tr><td>" . htmlspecialchars($izena) . "</td>";
                echo "<td></td>";
            }
            /*foreach ($zinema.getPelikulak() as $pelikula) {
            }*/

            echo "</table>";
        ?>
    </div>

    <form method="POST">
        <label for="izena">Izena:</label>
        <input type="text" id="izena" name="izena"><br>

        <label for="isan">ISAN:</label>
        <input type="text" id="isan" name="ISAN"><br>

        <label for="urtea">Urtea:</label>
        <input type="number" id="urtea" name="urtea"><br>

        <label for="puntuazioa">Puntuazioa:</label>
        <select name="puntuazioa">
            <option value="1">1/5</option>
            <option value="2">2/5</option>
            <option value="3">3/5</option>
            <option value="4">4/5</option>
            <option value="5">5/5</option>
        </select>
        <br>

        <button type="submit" name="gehitu" value="1">Bidali</button>

        <?php
            $kontagailua = 0;

            foreach ($izenak as $izena) {
                echo '<input type="hidden" name="izenak[' . $kontagailua . ']" value="'
                    . htmlspecialchars($izena, ENT_QUOTES, 'UTF-8') . '">';
                $kontagailua++;
            }
            $kontagailua = 0;
            foreach($zinema->getPelikulak() as $pelikula) {
                echo '<input type="hidden" name="izenak[' . $kontagailua . ']" value"'
                . htmlspecialchars($pelikual->getIzena()) . '">';
            }
        ?>
    </form>
</body>
</html>