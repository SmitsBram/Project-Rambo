<?php

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Login'
        ];
    
        $this->view('login/index', $data);
    }
}