<?php

class dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Homepage'
        ];
    
        $this->view('dashboard/index', $data);
    }
}