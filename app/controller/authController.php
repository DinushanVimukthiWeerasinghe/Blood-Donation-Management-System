<?php

namespace App\controller;

use App\model\Authentication\Login;
use Core\Application;
use Core\BaseMiddleware;
use Core\middleware\AuthenticationMiddleware;
use Core\Request;
use Core\Response;

class authController extends \Core\Controller
{

    public function __construct()
    {
        if (Application::$app->getUser()) {
            $role = Application::$app->getUser()->getRole();
            Application::Redirect('/' . $role . '/dashboard');

        }else{
            $this->registerMiddleware(new AuthenticationMiddleware(['managerLogin'], BaseMiddleware::ALLOWED_ROUTES));
        }

    }

    public function logout()
    {
        if (Application::$app->isGuest())
        {
            Application::$app->response->redirect('/');
        }else{
            Application::$app->logout();
            Application::$app->response->redirect('/');
        }
    }
    public function managerLogin(Request $request, Response $response): string
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
        return $this->render('Manager\login');
    }

}