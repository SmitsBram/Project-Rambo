<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Geniet van Momenten van Gastronomisch Genot bij Rocambolesque | Ontdek Heerlijke Gerechten, Bekroonde Wijnen en Onvergetelijk Dineren.">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/public/css/reserveren.css">
    <title>Rocambolesque</title>
</head>

<body>

    <div class="reserveren-banner">
        <img src="/public/img/reserveren.png" alt="Reserveren"><br>
    </div>
    <br><br>
    <br><br>



    <h1 class="Reserveren-titel">Reserveren</h1>

    </div>
    


    <!--de navbar-->

    <h2 class="Reserveren-openingstijd">Het restaurant is iedere dag van 17:00 - 22:00 geopened. De bar is van 22:00 - 00:00 open.</h2>

    <div class="container">
        <h2>Reserveren</h2>
        <form id="reserveringsFormulier" action="/reserveren/handleReservation" method="post">
            <div class="form-group">
                <label for="personen">Aantal personen:</label>
                <input type="number" id="personen" name="personen"  min="1" max="50" required>
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
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
    </select>
    
    <div id="reservering-melding" style="display: none;">
    het reserveren is geslaagd, Bedankt voor uw reservering! .
</div>

</div>

            <button type="submit">Reserveren</button>
        </form>
    </div>

    <script>
        // Get the div element
    
        document.addEventListener("DOMContentLoaded", function() {
    var reserveringsFormulier = document.getElementById("reserveringsFormulier");
    var reserveringMelding = document.getElementById("reservering-melding");

    reserveringsFormulier.addEventListener("submit", function(event) {
        event.preventDefault(); // Voorkom standaardformulierinzending

        var formData = new FormData(reserveringsFormulier);

        // Stuur een AJAX-verzoek naar de server om gegevens op te slaan
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "/handleReservation.php");
        xhr.send(formData);

        // Toon de melding
        reserveringMelding.style.display = "block";
    });
});
// Show the div element
reserveringMelding.style.display = "block";
        document.addEventListener("DOMContentLoaded", function() {
            var reserveringsFormulier = document.getElementById("reserveringsFormulier");

            reserveringsFormulier.addEventListener("submit", function(event) {
                //event.preventDefault(); // Voorkom standaardformulierinzending

                var formData = new FormData(reserveringsFormulier);

                // Stuur een AJAX-verzoek naar de server om gegevens op te slaan
                fetch("handleReservation.php", {
                    method: "POST",
                    body: formData
                })
                .then(function(response) {
                    if (response.ok) {
                        return response.text();
                    } else {
                        throw new Error("Serverfout");
                    }
                })
                .then(function(data) {
                    // Hier kun je de reactie van de server verwerken (bijv. toon een succesbericht)
                    console.log(data);
                })
                .catch(function(error) {
                    // Hier kun je eventuele fouten verwerken
                    console.error(error);
                });
            });
        });
    </script>
</body>
