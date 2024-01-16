<?php

class Menukaart extends BaseController
{

    private MenukaartModel $MenukaartModel;

    function __construct()
    {
        $this->MenukaartModel = $this->model('MenukaartModel');
    }

    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Hoi";
            var_dump($_POST);
            $this->MenukaartModel->addDish($_POST["gerecht"], $_POST["descNL"], $_POST["descENG"], $_POST["prijs"]);}

        $fullMenus = $this->MenukaartModel->getFullMenu();

        // var_dump($fullMenus);
        // die();

        $this->view('Menukaart/index', [
            'fullMenus' => $fullMenus,
        ]);
    }

    // public function dish()
    // {
    //     $this->MenukaartModel->addDish();
    // }
}