<?php

namespace App\controller;

use App\model\RegisterModel as RegisterModel;
use Core\Application;
use Core\Request;
use Core\Response;

class organisationController extends \Core\Controller{
    public function login(Request $request,Response $response)
    {
        if($request->isPost()){
            $registerModel = new RegisterModel();
//            require_once Application::$ROOT_DIR.'/API/adduser.php';
        }
//        $this->setLayout('auth');
        return $this->render('login','login');
    }
    public function register(Request $request,Response $response)
    {
        $registerModel = new RegisterModel();
        if($request->isPost()){
//            require_once Application::$ROOT_DIR.'/API/adduser.php';
//            $this->render('register','register');
            $registerModel -> loadData($request->getBody());
            echo '<pre>';
            print_r($request->getBody());
            echo '</pre>';
            exit;
            if($registerModel->validate() && $registerModel->register()){
                return 'Success';
            }
            return $this->render('register',[
                'model' => $registerModel
            ]);
        }
//        $this->setLayout('auth');
        return $this->render('register','register');
    }
    public function home(Request $request,Response $response)
    {
        if($request->isPost()){
            require_once Application::$ROOT_DIR.'/API/adduser.php';
        }
        return $this->render('home','home');
    }
}