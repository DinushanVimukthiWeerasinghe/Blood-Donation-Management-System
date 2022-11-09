<?php

namespace App\controller;

use Core\Request;
use Core\Response;

class donorController extends \Core\Controller
{
    public function home(Request $request, Response $response)
    {
        $name="Dinushan";
        return $this->render('donor',['name'=>$name]);
    }


}