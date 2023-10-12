<?php

class geschiedenis extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Homepage'
        ];
    
        $this->view('geschiedenis/index', $data);
    }
}