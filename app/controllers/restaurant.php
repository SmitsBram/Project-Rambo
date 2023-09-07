<?php

class Restaurant extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Homepage'
        ];
    
        $this->view('restaurant/index', $data);
    }
}