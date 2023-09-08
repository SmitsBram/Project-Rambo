<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
</head>
<body>
    <h1>Reserveren</h1>
     
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
<!-- dit word nog verplaats naar scss  -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        input[type="time"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
        }
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>

</body>
</html>