<?php

namespace App\controller;

use App\model\Authentication\Login;
use Core\Application;
use Core\BaseMiddleware;
use Core\Controller;
use Core\middleware\AuthenticationMiddleware;
use Core\Request;
use Core\Response;

class authController extends Controller
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
//            Application::$app->response->redirect('/');
                Application::$app->response->redirect('/manager/login');
        }else{
            Application::$app->logout();
//            Application::$app->response->redirect('/');
            Application::$app->response->redirect('/manager/login');
        }
    }
    public function managerLogin(Request $request, Response $response): string
    {
        $login = new Login();
        if ($request->isPost())
        {
            $login->loadData($request->getBody());
            $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if ($login->validate() && $login->login())
            {
                $response->redirect('/manager/dashboard');
                return '';
            }
        }
        $this->layout='NonAuth';
        return $this->render('Manager/login',['model'=>$login]);
    }

}