<?php

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Homepage'
        ];

        $this->view('contact/index', $data);
    }
}
