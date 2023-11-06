<?php

class Register extends BaseController
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
            'title' => 'Register',
            'error' => $error,
        ];

        $this->view('register/index', $data);
    }

    public function register()
    {
        session_start();

        $name = $_POST['name'] ?? "";
        $password = $_POST['password'] ?? "";
        $number = $_POST['number'] ?? "";
        $email = $_POST['email'] ?? "";

        if (!$name) {
            $_SESSION['error'] = "Naam is verplicht";
            header("Location: /Register/index", TRUE, 303);
            return;
        }

        // Valideren

        $user = $this->userModel->findUserByEmail($email);

        if ($user) {
            $_SESSION['error'] = "Gebruikersnaam bestaat al";
            header("Location: /Register/index", TRUE, 303);
            return;
        }

        // Het wachtwoord hashen
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $this->userModel->register($email, $name, $number, $hashedPassword);

        header("Location: /Login/index", TRUE, 303);
    }
}
