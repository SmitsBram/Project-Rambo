<?php

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Contact'
        ];

        $this->view('Contact/index', $data);
    }
}
