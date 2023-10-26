<?php
require_once '/libraries/Database.php'; 
require_once '/models/ReserverenModel.php'; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $personen = $_POST["personen"];
    $datum = $_POST["datum"];
    $tijd = $_POST["tijd"];
    $tafel = $_POST["tafel"];

    $db = new Database();
    $reserverenModel = new ReserverenModel($db);

    $reserverenModel->insertReservation($personen, $datum, $tijd, $tafel);
}
?>
