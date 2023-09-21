<?php

class BaseController
{
    public function part($name, $data = [])
    {
        if (file_exists('../app/views/parts/' . $name . '.php')) {
            require_once('../app/views/parts/' . $name . '.php');
        } else {
            echo 'De view bestaat niet';
        }
    }

    public function view($view, $data = [])
    {
        if ( $view != 'login/index' ) {
            $this->part('header', $data);
        }

            
    
        
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once('../app/views/' . $view . '.php');
        } else {
            echo 'De view bestaat niet';
        }
        
        if ( $view != 'login/index' ) {
        $this->part('footer', $data);
        }
    }

    public function model($model)
    {
        if (file_exists('../app/models/' . $model . '.php')) {
            require_once '../app/models/' . $model . '.php';
            return new $model();
        } else {
            echo 'De model bestaat niet';
        }
    }
}
