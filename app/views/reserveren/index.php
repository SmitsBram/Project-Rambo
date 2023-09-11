<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveren-pagina</title>
    <link rel="stylesheet" href="/css/reserveren.css">
</head>
<body>
    <h1>Reserveren</h1>

    <!--de navbar is tijdelijk -->

    <div class="navbar">
    <a href="#">Home</a>
    <a href="#">Over Ons</a>
    <a href="#">Diensten</a>
    <a href="#">Contact</a>
</div>
     
    <div class="container">
        <h2>Reserveren</h2>
        <form>
            <div class="form-group">
                <label for="personen">Aantal personen:</label>
                <input type="number" id="personen" name="personen" required>
            </div>
            <div class="form-group">
                <label for="datum">Datum:</label>
                <input type="date" id="datum" name="datum" required>
            </div>
            <div class="form-group">
                <label for="tijd">Tijd:</label>
                <input type="time" id="tijd" name="tijd" required>
            </div>
            <div class="form-group">
                <label for="tafel">Tafel:</label>
                <select id="tafel" name="tafel" required>
                    <option value="Tafel 1">Tafel 1</option>
                    <option value="Tafel 2">Tafel 2</option>
                    <option value="Tafel 3">Tafel 3</option>
                    <option value="Tafel 4">Tafel 4</option>
                </select>
            </div>
            <button type="submit">Reserveren</button>
        </form>
    </div>

<!-- de footer is ook tijdelijk -->

    <div class="footer">
    &copy; 2023 Jouw Bedrijfsnaam. Alle rechten voorbehouden.
</div>

</body>
</html>