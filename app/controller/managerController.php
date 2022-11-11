<?php

namespace App\controller;

use App\middleware\userMiddleware;
use App\model\Authentication\Login;
use App\model\users\Manager;
use Core\Request;
use Core\Response;

class managerController extends \Core\Controller
{


    public function __construct()
    {
        $this->registerMiddleware(new userMiddleware(['manager']));
    }

    public function login(Request $request, Response $response): string
    {
        if ($request->isPost())
        {
            $login = new Login();
            $login->loadData($request->getBody());
            if ($login->validate() && $login->login())
            {
                $response->redirect('/manager/dashboard');
                return '';
            }
        }
        $this->layout='auth';
        return $this->render('Manager\login','login');
    }

    public function register(Request $request,Response $response ): string
    {
        $manager=new Manager();
        if ($request->isPost())
        {
            $manager->loadData($request->getBody());
            if($manager->validate() && $manager->save())
            {

                $response->redirect('/manager/login');
            }
        }
        $this->layout='auth';
        return $this->render('Manager\register','register');
    }

    public function dashboard(): string
    {
        $this->layout='auth';
        return $this->render('Manager\managerBoard','dashboard');
    }
}