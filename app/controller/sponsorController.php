<?php

namespace App\controller;


use Core\Application;
use Core\Request;
use Core\Response;

class sponsorController extends \Core\Controller
{
    public function home()
    {
        $params=[
            'name'=>'PHP CODES',
            'Author'=>'Dinushan Vimukthi',

        ];
        return $this->render('home','index',$params);
    }


    public function contact(Request $request,Response $response)
    {
        if($request->isPost()){
            require_once Application::$ROOT_DIR.'/API/adduser.php';
        }
        return $this->render('contact');
    }
    public function login(Request $request,Response $response)
    {
        return $this->render('login','index');
    }
}