<?php

class Reserveren extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Homepage'
        ];
    
        $this->view('Reserveren/index', $data);
    }
}