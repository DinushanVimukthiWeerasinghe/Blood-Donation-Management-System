<?php

namespace App\controller;

use App\model\Authentication\Login;
use App\model\users\Campaign;
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
        return $this->render('organisation/login');
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
        $userName='';
        if (isset($_SESSION['userInfo'])){
            $userName=$_SESSION['userInfo'];
        }
        if($request->isPost()){
            require_once Application::$ROOT_DIR.'/API/adduser.php';
        }

        return $this->render('Organisation\home',['userName'=>$userName]);
    }

    public function profile(Request $request,Response $response): string
    {
        if($request->isPost()){
            require_once Application::$ROOT_DIR.'/API/adduser.php';
        }
        return $this->render('Organisation\profile',);
    }

    public function manage(Request $request,Response $response): string
    {
        $userPassword = '';
        $userEmail = '';
        $userEmail = $_SESSION['email'];
        $userName = $_SESSION['userInfo'];

        if($request->isPost()){
            require_once Application::$ROOT_DIR.'/API/adduser.php';
        }
        return $this->render('Organisation\manage',['userName'=>$userName,'userEmail'=>$userEmail]);
    }
    public function create(Request $request,Response $response): string
    {
        $campaign = new Campaign();
        if($request->isPost()){
            $campaign -> loadData($request->getBody());
//            require_once Application::$ROOT_DIR.'/API/adduser.php';
            $campaign->create();
        }
        return $this->render('Organisation\create');
    }
    public function history(Request $request,Response $response): string
    {
        if($request->isPost()){
            require_once Application::$ROOT_DIR.'/API/adduser.php';
        }
        return $this->render('Organisation\history');
    }

    public function logout(Request $request,Response $response): string
    {
        if($request->isPost()){
            require_once Application::$ROOT_DIR.'/API/adduser.php';
        }
//        return $this->render('Organisation\home','Orghome');
        Application::$app->logout();
    }
}