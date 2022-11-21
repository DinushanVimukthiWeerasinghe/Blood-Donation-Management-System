<?php

namespace App\controller;

class hospitalController extends \Core\Controller
{
    public function __construct()
    {
        $this->layout='auth';
    }

    public function register()
    {
        return $this->render('hospital\register');
    }

    public function login()
    {
        return $this->render('hospital\login');
    }

    public function dashboard()
    {
        return $this->render('hospital\hospitalBoard');
    }
}
