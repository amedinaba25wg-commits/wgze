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
            $zinema = new Zinema();
            $izenak = $_POST['izenak'] ?? [];
            $isanak = $_POST['isanak'] ?? [];
            $urteak = $_POST['urteak'] ?? [];
            $puntuazioak = $_POST['puntuazioak'] ?? [];

            if(isset($_POST['gehitu']) && count($izenak) > 0) {
                for($i = 0; $i < count($izenak); $i++) {
                    $pelikula = new Pelikula($izenak[$i], $isanak[$i], $urteak[$i], $puntuazioak[$i]);
                    $zinema->gehituPelikula($pelikula);
                }
                    echo '<table border="1px solid black"><tr><th>Izena</th><th>ISAN</th><th>Urtea</th><th>Puntuazioa</th></tr>';
            }
            if (isset($_POST['gehitu'])) {
                if(empty($_POST['izena']) && empty($_POST['isan'])) {
                    echo '<script>
                            alert("Ez duzu ez Izenik ez isan zenbakirik sartu");
                        </script>';
                }
                else if(empty($_POST['izena'])) {
                    echo '<script>
                            alert("Ez duzu Izenik sartu");
                        </script>';
                }
                else if(empty($_POST['isan'])) {
                    echo '<script>
                            alert("Ez duzu isan zenbakirik sartu");
                        </script>';
                }
                else {
                    $pelikula = new Pelikula($_POST['izena'], $_POST['isan'], $_POST['urtea'], $_POST['puntuazioa']);
                    if($zinema->gehituPelikula($pelikula) == false) {
                        echo '<script>alert("Ezin izan da pelikula gehitu hurrengo erroreak gertatu izana izan daiteke: isan zenbakia ez edukitzea 8 karaktere, izan zenbakia errepikatuta egotea")</script>';
                    };
                }
                if(isset($_POST['gehitu']) && count($izenak) > 0) {
                    foreach ($zinema->getPelikulak() as $pelikula) {
                        echo "<tr><td>" . $pelikula->getIzena() . "</td>";
                        echo "<td>" . $pelikula->getIsan() . "</td>";
                        echo "<td>" . $pelikula->getUrtea() . "</td>";
                        echo "<td>" . $pelikula->getPuntuazioa() . "</td</tr>";
                    }
                    echo "</table>";
                }
                //$izenak[] = trim($_POST['izena']);
                //$isanak[] = trim($_POST['isan']);
                //$urteak[] = trim($_POST['urtea']);
                //$puntuazioak[] = trim($_POST['puntuazioa']);
            }
        ?>
    </div>

    <form method="POST">
        <label for="izena">Izena:</label>
        <input type="text" id="izena" name="izena"><br>

        <label for="isan">ISAN:</label>
        <input type="text" id="isan" name="isan"><br>

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
            if($zinema->getPelikulak()) {
                foreach($zinema->getPelikulak() as $pelikula) {
                    echo '<input type="hidden" name="izenak[' . $kontagailua . ']" value="'
                    . htmlspecialchars($pelikula->getIzena()) . '">';

                    echo '<input type="hidden" name="isanak[' . $kontagailua . ']" value="'
                    . htmlspecialchars($pelikula->getIsan()) . '">';

                    echo '<input type="hidden" name="urteak[' . $kontagailua . ']" value="'
                    . htmlspecialchars($pelikula->getUrtea()) . '">';

                    echo '<input type="hidden" name="puntuazioak[' . $kontagailua . ']" value="'
                    . htmlspecialchars($pelikula->getPuntuazioa()) . '">';
                    $kontagailua++;
                }
            }
        ?>
    </form>
</body>
</html>