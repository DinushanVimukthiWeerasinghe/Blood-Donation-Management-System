<?php

namespace App\controller;


use Core\Application;
use Core\Request;
use Core\Response;

class siteController extends \Core\Controller
{
    public function home(Request $request, Response $response)
    {
        $params=[
            'name'=>'PHP CODES',
            'Author'=>'Isurika Arunodi',

        ];
        return $this->render('home',$params);
    }

    public function about(Request $request,Response $response)
    {

        return $this->render('about');
    }
}