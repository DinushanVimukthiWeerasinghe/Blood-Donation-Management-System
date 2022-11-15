<?php

namespace App\controller;

use App\model\Authentication\Login;
use App\model\users\Manager;
use Core\Application;
use Core\BaseMiddleware;
use Core\middleware\AuthenticationMiddleware;
use Core\middleware\ManagerMiddleware;
use Core\Request;
use Core\Response;

class managerController extends \Core\Controller
{

    public function __construct()
    {
        $this->registerMiddleware(new AuthenticationMiddleware(['login'], BaseMiddleware::ALLOWED_ROUTES));
        $this->registerMiddleware(new ManagerMiddleware());

    }



    public function register(Request $request,Response $response ): string
    {
        $manager=new Manager();
        if ($request->isPost())
        {
            $manager->loadData($request->getBody());
            $manager->getFile()->saveFile();
            if($manager->validate() && $manager->save())
            {
                
                $response->redirect('/manager/login');
            }
        }
        $this->layout='auth';
        return $this->render('Manager\register');
    }

    public function dashboard(): string
    {
        $manager=new Manager();
//        print_r(Application::$app->getUser());
        $this->layout='auth';
        return $this->render('Manager\managerBoard');
    }
}