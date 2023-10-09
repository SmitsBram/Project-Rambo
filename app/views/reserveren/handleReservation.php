<?php
// handleReservation.php
require_once 'Database.php'; // Inclusie van Database-klasse
require_once 'ReserverenModel.php'; // Inclusie van ReserverenModel-klasse

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ontvang de gegevens die zijn ingediend via het formulier
    $personen = $_POST["personen"];
    $datum = $_POST["datum"];
    $tijd = $_POST["tijd"];
    $tafel = $_POST["tafel"];

    // Maak een instantie van de Database-klasse
    $db = new Database();

    // Maak een instantie van de ReserverenModel-klasse en injecteer de databaseverbinding
    $reserverenModel = new ReserverenModel($db);

    // Roep de methode opslaanReservering aan om de gegevens op te slaan
    $reserverenModel->opslaanReservering($personen, $datum, $tijd, $tafel);

   
}
?>
