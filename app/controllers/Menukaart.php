<?php

class Menukaart extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Homepage'
        ];
    
        $this->view('Menukaart/index', $data);
    }
}