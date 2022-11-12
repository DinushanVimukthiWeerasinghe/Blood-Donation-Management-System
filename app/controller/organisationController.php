<?php

namespace App\controller;

use App\model\Authentication\Login;
use App\model\RegisterModel as RegisterModel;
use App\model\users\User;
use Core\Application;
use Core\Request;
use Core\Response;

class organisationController extends \Core\Controller{

    public function login(Request $request,Response $response): string
    {
        $loginForm = new Login();
        if($request->isPost()){
            $loginForm->loadData($request->getBody());
            if($loginForm->validate() && $loginForm->login()){
                $response->redirect('/organisation');
            }
        }
//        return $this->render('Organisation/login',[
//            'model' => $loginForm
//        ]);
        return $this->render('organisation/login','Orglogin');
    }
    public function register(Request $request,Response $response): string
    {
        $user = new User();
        if($request->isPost()){
//            require_once Application::$ROOT_DIR.'/API/adduser.php';
//            $this->render('register','register');
            $user -> loadData($request->getBody());
//            echo '<pre>';
//            print_r($request->getBody());
//            echo '</pre>';
            if($user->validate() && $user->register()){
                Application::$app->session->setFlash('success','Thanks for Registering.');
                Application::$app->response->redirect('/organisation/login');
            }
            return $this->render('Organisation\register',[
                'model' => $user
            ]);
        }
//        $this->setLayout('auth');
        return $this->render('Organisation\register','Orgregister');
    }
    public function home(Request $request,Response $response): string
    {
        if($request->isPost()){
            require_once Application::$ROOT_DIR.'/API/adduser.php';
        }
        return $this->render('Organisation\home','Orghome');
    }

    public function profile(Request $request,Response $response): string
    {
        if($request->isPost()){
            require_once Application::$ROOT_DIR.'/API/adduser.php';
        }
        return $this->render('Organisation\profile','Orgprofile');
    }
}