<?php

class Register extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Register'
        ];
    
        $this->view('register/index', $data);
    }
}