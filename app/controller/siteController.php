<?php

namespace App\controller;


use Core\Application;
use Core\Request;
use Core\Response;

class siteController extends \Core\Controller
{
    public function home()
    {
        $params=[
            'name'=>'PHP CODES',
            'Author'=>'Dinushan Vimukthi',

        ];
        return $this->render('home',$params);
    }

    public function about(Request $request,Response $response)
    {
        if($request->isPost()){
            require_once Application::$ROOT_DIR.'/API/adduser.php';
        }
        return $this->render('about');
    }
    public function contact(Request $request,Response $response)
    {
        if($request->isPost()){
            require_once Application::$ROOT_DIR.'/API/adduser.php';
        }
        return $this->render('contact');
    }

}