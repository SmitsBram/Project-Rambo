<?php

class Login extends BaseController
{
    private $userModel;

    function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    public function index()
    {
        session_start();

        $error = $_SESSION['error'] ?? null;
        unset($_SESSION['error']);

        $data = [
            'title' =>  'Login',
            'error' => $error,
        ];

        $this->view('login/index', $data);
    }

    public function login()
    {
        session_start();
    
        $email = $_POST['email'] ?? "";
        $password = $_POST['password'] ?? "";
    
        // Valideer of beide velden zijn ingevuld
        if (empty($email) || empty($password)) {
            $_SESSION['error'] = "Vul zowel e-mail als wachtwoord in.";
            header("Location: /Login/index", TRUE, 303);
            return;
        }
    
        $user = $this->userModel->findUserByEmail($email);
    
        if ($user) {
            // Haal het gehashte wachtwoord op uit de database
            $hashedPassword = $user->password;
            
            if (password_verify($password, $hashedPassword)) {
                // Inloggen is gelukt
                $_SESSION['user_id'] = $user->id; // Sla de gebruikerssessie op
                header("Location: /Dashboard/index", TRUE, 303); // Doorverwijzen naar het dashboard of een andere pagina
            } else {
                $_SESSION['error'] = "Ongeldige inloggegevens";
                header("Location: /Login/index", TRUE, 303);
            }
        } else {
            $_SESSION['error'] = "Gebruiker niet gevonden";
            header("Location: /Login/index", TRUE, 303);
        }
    }
}