<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top-Movies Ariketa</title>
</head>
<body max-width="1480px">
    <?php $erabiltzailea = $_POST['erabiltzailea'] ?? "Anonimoa"; ?>
    <p>erabiltzailea: "<?= htmlspecialchars($erabiltzailea, ENT_QUOTES, 'UTF-8') ?>"</p>
    <center><h1>Top movies Ariketa</h1>
    <?php
        require "funtzioak.php";
        $zinema = zinemaSortu();
        if(isset($_POST['bidali'])) {
            try {
                if(empty($_POST['izena']) && empty($_POST['isan']) && empty($_POST['urtea'])) {
                    throw new Exception("Errorea filma bidaltzean: Ez dago ez isan zenbakirik ez izenik ez urterik");
                }
                elseif(empty($_POST['izena']) && empty($_POST['isan'])) {
                    throw new Exception("Errorea filma bidaltzen: Ez dago ez izenik ez isan zenbakirik");
                }
                elseif(empty($_POST['izena']) && empty("urtea")) {
                    throw new Exception("Ez da ez izenik ez urterik sartu");
                }
                else {
                    if(empty($_POST['isan']) && !empty($_POST['izena'])) {
                        $zinema2 = bilatuFilma($zinema, $_POST['izena']);
                    }
                    elseif(empty($_POST['izena']) && !empty($_POST['isan'])) {
                        $zinema->ezabatuFilma($_POST['isan']);
                    }
                    else {
                        try {
                            $filma = new Filma($_POST['izena'], $_POST['isan'], $_POST['urtea'], $_POST['puntuazioa']);
                            $zinema->gehituFilma($filma);
                        }
                        catch(Exception $e) {
                            echo "<script>alert('Errorea filma gehitzerakoan: " . $e->getMessage() . "')</script>";
                        }
                    }
                }
            }
            catch (Exception $e) {
                echo "<script>alert('" . $e->getMessage() . "')</script>";
            }
        }
        if(!isset($zinema2)) {
            echo taulaSortu($zinema);
        }
        else {
            echo taulaSortu($zinema2);
        }
        //Mantentzeko formularioaren balioak:
        $izena = $_POST['izena'] ?? "";
        $isan = $_POST['isan'] ?? "";
        $urtea = $_POST['urtea'] ?? "";
    ?>
    
    <form method="Post" style="display: flex; flex-direction: column; align-content: left; width: 200px">
        <label for="izena">Izena: </label>
        <input type="text" name="izena" value="<?= htmlspecialchars($izena, ENT_QUOTES, 'UTF-8') ?>" /><br>
        <label for="isan">ISAN: </label>
        <input type="text" name="isan" value="<?= htmlspecialchars($isan, ENT_QUOTES, 'UTF-8') ?>" /><br>
        <label for="urtea">Urtea: </label>
        <input type="number" name="urtea" value="<?= htmlspecialchars($urtea, ENT_QUOTES, 'UTF-8') ?>" /><br>
        <label for="puntuazioa">Puntuazioa</label>
        <select name="puntuazioa">
            <option value="1">1/5</option>
            <option value="2">2/5</option>
            <option value="3">3/5</option>
            <option value="4">4/5</option>
            <option value="5">5/5</option>
        </select><br>
        <input type="submit" name="bidali" value="bidali" />
        <?php
            echo hiddenSortu($zinema);
        ?>
    </form>
    
</center>
</body>
</html>