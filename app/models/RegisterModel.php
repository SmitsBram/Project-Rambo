<?php
class Register extends BaseController
{
    private $registerModel;

    public function __construct()
    {
        $this->registerModel = $this->model('RegisterModel');
    }

    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            if ($password !== $confirm_password) {
                echo "Passwords do not match.";
                return;
            }

            // Password validation using regex
            $passwordRegex = '/^(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,12}$/';
            if (!preg_match($passwordRegex, $password)) {
                echo "Password must have at least 8 characters, maximum 12 characters, at least 1 symbol, and 1 number.";
                return;
            }

            $data = [
                'voornaam' => $_POST['firstname'],
                'Tussenvoegsel' => $_POST['infix'],
                'achternaam' => $_POST['lastname'],
                'wachtwoord' => password_hash($password, PASSWORD_DEFAULT) 
            ];

            $result = $this->registerModel->insertRegisterData($data);
            if ($result) {
                echo "Registration successful!";
            } else {
                echo "Registration failed.";
            }
        } else {
            $data = [
                'title' => 'Register'
            ];
            $this->view('Register/index', $data);
        }
    }
}
