<?php
// Inclusief de Database-klasse
require_once(__DIR__ . '/../libraries/Database.php');

class Reserveren extends BaseController
{
    private $db;

    public function __construct()
    {
        // Inclusief het ReserverenModel en config.php
        require_once('../app/models/ReserverenModel.php');
        require_once('../app/config/config.template.php');

        // Maak een instantie van de Database-klasse
        $this->db = new Database();
    }

    public function index()
    {
        $data = [
            'title' => 'Homepage'
        ];

        $this->view('reserveren/index', $data);
    }

    public function handleReservation()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verkrijg formuliergegevens
            $aantal_personen = $_POST["personen"];
            $reserveringsdatum = $_POST["datum"];
            $reserveringstijd = $_POST["tijd"];
            $tafel = $_POST["tafel"];

            // Valideer de invoer (voeg hier eventuele validatiecode toe)

            // Maak een instantie van het ReserverenModel en geef de databaseverbinding door
            $reserverenModel = new ReserverenModel($this->db);

            // Voeg de reserveringsgegevens in de database in
            $reservation_success = $reserverenModel->insertReservation($aantal_personen, $reserveringsdatum, $reserveringstijd, $tafel);

            if ($reservation_success) {
                // Als de reservering is gelukt, stuur de gebruiker door naar de homepage of een succespagina
                header("Location: /"); // Verander dit pad naar de juiste bestemming
                exit;
            } else {
                // Als er iets fout is gegaan met het reserveren, geef een foutmelding weer
                echo "Er is iets fout gegaan met het reserveren. Probeer het opnieuw.";
            }
        }
    }

    public function showReservations() {
        // Maak een instantie van het ReserverenModel
        $reserverenModel = new ReserverenModel();
    
        // Roep de methode aan om gegevens op te halen
        $reservations = $reserverenModel->getReservations();
    
        // Geef de gegevens door aan een weergave (view) om weer te geven
        $data = [
            'reservations' => $reservations
        ];
    
        $this->view('reserveren/reservations', $data);
    }
    
}
?>
