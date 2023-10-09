<?php

class UserDashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'UserDashboard'
        ];

        $this->view('dashboard/UserDashboard', $data);
    }
}