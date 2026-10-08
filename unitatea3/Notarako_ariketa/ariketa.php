<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa - Top Movies</title>
</head>
<body>
    <center><h1>Ariketa - Top Movies</h1></center>
    <div id="filmak"></div>
    <form method="POST">
        <label for="izena">Izena:</label><input type="text" name="izena"/><br>
        <label for="isan">ISAN:</label><input type="text" name="ISAN"/><br>
        <label for="urtea">Urtea:</label><input type="number" name="urtea"/><br>
        <label for="puntuazioa">Puntuazioa:</label><select name="puntuazioa">
            <option value=1>1/5</option>
            <option value=2>2/5</option>
            <option value=3>3/5</option>
            <option value=4>4/5</option>
            <option value=5>5/5</option>
        </select>
        <button>Bidali</button>
    </form>
</body>
</html>