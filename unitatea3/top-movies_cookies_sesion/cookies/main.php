<?php
require 'zinema.php';
$zinema = new Zinema();

$pelikulak = [];
$kopurua = $_COOKIE['kopurua'] ?? 0;

// COOkien barruan dauden pelikulak errekuperatu
for ($i = 0; $i < $kopurua; $i++) {
    $pelikulak[] = [
        'izena' => $_COOKIE['izena' . $i] ?? '',
        'isan' => $_COOKIE['isan' . $i] ?? '',
        'urtea' => $_COOKIE['urtea' . $i] ?? '',
        'puntuazioa' => $_COOKIE['puntuazioa' . $i] ?? ''
    ];
}

if (isset($_POST['gehitu'])) {
    $izena = trim($_POST['izena'] ?? '');
    $isan = trim($_POST['isan'] ?? '');
    $urtea = $_POST['urtea'] ?? '';
    $puntuazioa = $_POST['puntuazioa'] ?? '1';

    // Izena badago baina ez dago ISAN zenbakirik: bilatu
    if ($izena !== '' && $isan === '') {
        $filtratutakoPelikulak = [];

        foreach ($pelikulak as $p) {
            if (stripos($p['izena'], $izena) !== false) {
                $filtratutakoPelikulak[] = $p;
            }
        }

        $pelikulak = $filtratutakoPelikulak;

        if (empty($pelikulak)) {
            $mezua = 'Ez da pelikularik aurkitu';
        }
    }

    // Ez izenik ez ISAN zenbakirik
    elseif ($izena === '' && $isan === '') {
        $mezua = 'Ez duzu ez Izenik ez ISAN zenbakirik sartu';
    }

    // Ez izenik
    elseif ($izena === '') {
        $mezua = 'Ez duzu Izenik sartu';
    }

    // Izena eta ISAN baldin badaude
    else {
        $errepikatuta = false;

        foreach ($pelikulak as $p) {
            if ($p['isan'] === $isan) {
                $errepikatuta = true;
                break;
            }
        }

        if ($errepikatuta) {
            $mezua = 'ISAN zenbakia errepikatuta dago';
        } elseif (strlen($isan) != 8) {
            $mezua = 'ISAN zenbakiak 8 karaktere izan behar ditu';
        } else {
            $pelikulak[] = [
                'izena' => $izena,
                'isan' => $isan,
                'urtea' => $urtea,
                'puntuazioa' => $puntuazioa
            ];

            // Pelikula bakoitzaren datuak cookie batean gorde
            $i = count($pelikulak) - 1;

            setcookie('izena' . $i, $izena, time() + 3600, '/');
            setcookie('isan' . $i, $isan, time() + 3600, '/');
            setcookie('urtea' . $i, $urtea, time() + 3600, '/');
            setcookie('puntuazioa' . $i, $puntuazioa, time() + 3600, '/');

            // Pelikula kopurua gorde
            setcookie('kopurua', count($pelikulak), time() + 3600, '/');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Movies - Cookie</title>
</head>
<body>
    <center><h1>Pelikulak</h1></center>
    <?php if (isset($mezua)) { ?>
        <script>
            alert(<?= htmlspecialchars($mezua, ENT_QUOTES, 'UTF-8') ?>);
        </script>
    <?php } ?>
    <table border="1">
        <tr>
            <th>Izena</th>
            <th>ISAN</th>
            <th>Urtea</th>
            <th>Puntuazioa</th>
        </tr>

        <?php foreach ($pelikulak as $p) { ?>
            <tr>
                <td><?= htmlspecialchars($p['izena'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($p['isan'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars((string)$p['urtea'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars((string)$p['puntuazioa'], ENT_QUOTES, 'UTF-8') ?>/5</td>
            </tr>
        <?php } ?>
    </table>

    <h2>Pelikula berria gehitu / bilatu</h2>
    <form method="POST">
        <label for="izena">Izena:</label>
        <input type="text" id="izena" name="izena">
        <br>
        <label for="isan">ISAN:</label>
        <input type="text" id="isan" name="isan">
        <br>
        <label for="urtea">Urtea:</label>
        <input type="number" id="urtea" name="urtea">
        <br>
        <label for="puntuazioa">Puntuazioa:</label>
        <select id="puntuazioa" name="puntuazioa">
            <option value="1">1/5</option>
            <option value="2">2/5</option>
            <option value="3">3/5</option>
            <option value="4">4/5</option>
            <option value="5">5/5</option>
        </select>
        <br>
        <button type="submit" name="gehitu" value="1">Bilatu / Gehitu</button>
    </form>

</body>
</html>
