<?php

namespace App\controller;

use App\model\users\Admin;
use Core\Request;
use Core\Response;

class adminController extends \Core\Controller
{
    public function login(Request $request, Response $response): string
    {
//        $Admin=new Admin();
//        if ($request->isPost()) {
//            print_r($request->getBody());
//        }
        $this->layout='auth';
        return $this->render('Admin\login','login');
    }

    public function register(Request $request, Response $response): string
    {
        if ($request->isPost())
        {
            $admin=new Admin();
            $admin->loadData($request->getBody());
            echo '<pre>';
            print_r($admin);
            echo '</pre>';

        }

        $this->layout='auth';
        return $this->render('Admin\register','register');
    }
}