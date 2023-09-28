<?php

class Vergeten extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Vergeten'
        ];
    
        $this->view('vergeten/index', $data);
    }
}