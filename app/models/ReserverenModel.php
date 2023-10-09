<?php
require_once('../app/libraries/Database.php');

class ReserverenModel {
    private $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=rocambolesque;", "root", "");
    }

    public function insertReservation($aantal_personen, $reserveringsdatum, $reserveringstijd, $tafel) {
        $sql = "INSERT INTO Reserveren (aantal_personen, reserveringsdatum, reserveringstijd, tafel) 
                VALUES (?, ?, ?, ?)";

        // Prepare the SQL statement
        $stmt = $this->db->prepare($sql);

        // Bind the parameters to the statement and execute
        if ($stmt->execute([$aantal_personen, $reserveringsdatum, $reserveringstijd, $tafel])) {
            return true; // Successful reservation
        } else {
            return false; // Reservation failed
        }
    }
}
